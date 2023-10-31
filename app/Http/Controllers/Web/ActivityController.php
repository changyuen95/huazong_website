<?php

namespace App\Http\Controllers\Web;

use Carbon\Carbon;
use App\Models\Event;
use App\Models\Group;
use Illuminate\Http\Request;
use App\Http\Services\EventService;
use App\Http\Controllers\Controller;

class ActivityController extends Controller
{
    //
    public function __construct(EventService $eventService)
    {
        $this->eventService = $eventService->eventQuery();
    }

    public function index()
    {
        $events = request()->type == "all" ? $this->eventService->get() : $this->eventService->paginate(6);

        return response()->json(["data" => $events]);
    }

    public function show($id)
    {
        $recentActivityList = $this->eventService->limit(3)->get();

        $event = $this->eventService->with(['images' => function ($query) {
            $query->where('type', 'detail');
        }])->find($id);

        $detailImage = $event->images->first();
        $detailImageUrl = $detailImage ? $detailImage->name : "";

        return view('event_detail', compact('event', 'detailImageUrl', 'recentActivityList'));
    }

    public function recentActivityIndex()
    {
        $groups = Group::where('status', 1)->get();
        return view('recent_activity', compact('groups'));
    }

    public function recentActivitySearch()
    {
        $fetchSearchParam = request()->search;
        $searchKeywordList = ['title', 'content'];

        $searchResult = EventService::searchEvent($this->eventService, $fetchSearchParam, $searchKeywordList);

        return response()->json(["data" => $searchResult]);
    }
}
