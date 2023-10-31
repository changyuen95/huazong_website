<?php

namespace App\Http\Services;

use Carbon\Carbon;
use App\Models\Event;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EventService
{
    public static function formattedDate($payload)
    {
        $dateTime = Carbon::parse($payload['event_date']);
        $formattedDate = $dateTime->format('Y-m-d H:i:s');

        return $formattedDate;
    }

    public static function eventQuery()
    {
        $eventQuery = Event::with('image', 'host')
            ->select([
                'events.*',
                DB::raw('DATE_FORMAT(publish_date, "%Y-%m-%d %H:%i") as formatted_publish_date'),
                DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d %H:%i") as formatted_created_at')
            ])
            ->where('status', Event::STATUS_ACTIVE)
            ->orderByDesc('publish_date')
            ->orderByDesc('created_at');

        return $eventQuery;
    }

    public static function searchEvent($event, $searchParam, $keywordList)
    {
        $searchResult = $event->where(function ($query) use ($keywordList, $searchParam) {
            foreach ($keywordList as $item) {
                $query->orWhere($item, 'like', '%' . strtolower($searchParam) . '%');
            }
        })->paginate(6);

        return $searchResult;
    }
}
