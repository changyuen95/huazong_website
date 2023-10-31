<?php

namespace App\Http\Controllers\Admin;

use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Admin;
use App\Models\Event;
use App\Models\Group;

use App\Library\RoleTag;
use Illuminate\Http\Request;
use App\Library\PermissionTag;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\EventRequest;
use App\Http\Services\EventService;
use App\Http\Services\ImageService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UpdateEventRequest;
use Illuminate\Support\Facades\Validator;

class EventController extends Controller
{

    protected $upload_path = '/events';


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::orderByDesc('publish_date')
            ->orderByDesc('created_at')
            ->get();

        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $groups = Group::where('status', 1)->get();

        return view('admin.event.create', compact('groups'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(EventRequest $request)
    {
        //
        $payload = $request->validated();

        if (!auth()->user()->hasPermissionTo(PermissionTag::PERMISSION_FOR_ADMIN)) {
            return redirect()->route('event.index')->withErrors(['message' => 'Only Admin Can Create The Posts.']);
        }

        return DB::transaction(function () use ($payload) {
            $formattedDate = EventService::formattedDate($payload);
            $admin = auth()->guard(RoleTag::ADMIN)->user();

            $result = Event::create([
                'title' => $payload['event_name'],
                'content' => $payload['event_description'],
                'publish_date' => $formattedDate,
                'status' => $payload['event_status'],
                'created_by' => $admin->id
            ]);

            ImageService::uploadImage($payload, $result);

            return redirect()->route('event.index', ['result' => $result])
                ->with('success', 'Event created successfully');
        });
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $event = Event::find($id);

        return view('admin.event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $event = Event::find($id);
        $groups = Group::where('status', 1)->get();
        return view('admin.event.edit', compact('event', 'groups'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(EventRequest $request, String $id)
    {
        //
        $payload = $request->validated();

        return DB::transaction(function () use ($payload, $id) {
            $eventQuery = Event::query();
            $formattedDate = EventService::formattedDate($payload);
            $admin = auth()->guard(RoleTag::ADMIN)->user();

            $eventQuery->where('id', $id)->update([
                'title' => $payload['event_name'],
                'content' => $payload['event_description'],
                'publish_date' => $formattedDate,
                'status' => $payload['event_status'],
                'created_by' => $admin->id
            ]);

            $fetchUpdatedResult = $eventQuery->find($id);

            ImageService::uploadImage($payload, $fetchUpdatedResult);

            return redirect()->route('event.index')->with('success', 'Event updated successfully');
        });
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $event = Event::find($id);
        $event->delete();
        $event->images()->delete();

        return response()->json(['success' => $event]);
    }

    public function uploadCKImage(Request $request)
    {

        $this->upload_path = storage_path() . $this->upload_path;

        $validator = Validator::make($request->toArray(), [
            "upload" => "required|file|image|max:2048"
        ], [
            "upload.required" => "Please select an image to upload.",
            "upload.file" => "Please upload an image.",
            "upload.image" => "Invalid file type. Please upload image type only. (jpg, jpeg, png, bmp and svg)",
            "upload.max" => "Upload limit exceeded, please upload the image within 2MB."
        ]);


        if ($validator->fails()) {
            return response()->json([
                "uploaded" => 0,
                "error" => [
                    "message" => $validator->errors()->first()
                ]
            ]);
        }

        if ($request->hasFile("upload")) {
            $file = $request->file("upload");
            $extension = strtolower($file->getClientOriginalExtension());
            $file_name = "media_" . date("Ymdhis") . rand(11, 99) . '.' . $extension;
            $upload = $file->move($this->upload_path, $file_name);
            $url = asset('storage/description_media/' . $file_name);
            if ($upload) {
                return response()->json([
                    "uploaded" => 1,
                    "fileName" => $file_name,
                    "url" => $url
                ]);
            } else {
                return response()->json([
                    "uploaded" => 0,
                    "error" => [
                        "message" => "Fail to upload image."
                    ]
                ]);
            }
        }
    }

    public function cropImage(Request $request)
    {

        $rules = array(
            'image_base64' => 'required',
        );

        $validation = Validator::make($request->all(), $rules);

        if ($validation->fails()) {
            return response()->json(['success' => false, 'message' => $validation->errors()->first()]);
        }

        $data = $request->image_base64;

        list($type, $data) = explode(';', $data);
        list(, $data)      = explode(',', $data);
        $data = base64_decode($data);

        list(, $type) = explode('/', $type);

        $destination_path = storage_path('app/public/event');
        if (!file_exists($destination_path)) {
            File::makeDirectory($destination_path);
        }
        $file_name = 'event_' . rand(111, 999) . date("Ymdhis") . '.' . $type; // renameing image

        $upload_success = file_put_contents($destination_path . '/' . $file_name, $data);

        if ($upload_success) {
        } else {
            // return Response::json('Upload error', 400);
            return response()->json(['success' => false, 'message' => 'Upload error']);
        }


        $url = asset('storage/event/' . $file_name);

        return response()->json(['success' => true, 'message' => 'Upload Success', 'data' => $url, 'name' => '/storage/event/' . $file_name]);
    }
}
