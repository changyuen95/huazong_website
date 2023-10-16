<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Group;
use Illuminate\Support\Facades\Validator;
use Session;

use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{

    protected $upload_path = '/app/public/description_media';


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        $events = Event::all();

        return view('admin.event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $companies = Group::all();

        return view('admin.event.create',compact('companies'));
 
    }

    /**
     * Store a newly created resource in storage.
     */
    
    public function store(Request $request)
    {
        //

        $validator = Validator::make($request, [
            'company_name' => 'required|max:191',
            'event_name' => 'required|max:191',
            'joined_point' => 'required|numeric|min:0',
            'attendance_point' => 'required|numeric|min:0',
            'event_description' => 'required',
            'event_location' => 'required|max:191',
            'event_address' => 'required|max:191',
            'event_email' => 'required|email|max:191',
            'event_contact' => 'required|max:191',
            'event_date' => 'required',
            'start_time' => 'required|before:end_time',
            'end_time' => 'required|after:start_time',
            'max_capacity' => 'required|integer|max:1000|min:0',
            // 'event_banner' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:50000',
            'file' => 'nullable|file|max:500000',
            'external_registration_link' => 'nullable|max:500',
            'allow_feedback' => 'required|in:0,1',
            'event_status' => 'required|in:Approved,Pending,Rejected,Postponed,Cancelled',

        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $new_event = new Event;
        $new_event->company_id = $request->company_name;
      
        $new_event->joined_point = $request->joined_point;
        $new_event->attendance_point = $request->attendance_point;
        $new_event->name = $request->event_name;
        $new_event->description = $request->event_description;
        $new_event->location = $request->event_location;
        $new_event->address = $request->event_address;
        $new_event->email = $request->event_email;
        $new_event->contact = $request->event_contact;
      
        $new_event->max_capacity = $request->max_capacity;
        $new_event->external_registration_link = $request->external_registration_link;
        $new_event->allow_feedback = $request->allow_feedback;
        $new_event->event_status = 'Pending';
        $new_event->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
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
