<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\Storage;

class ImageService
{
    public static function uploadImage($payload, $result)
    {
        $imagesList = [
            [
                "banner" => "main_banner",
                "type" => "main",
            ],
            [
                "banner" => "details_banner",
                "type" => "detail",
            ]
        ];

        foreach ($imagesList as $image) {
            $file = isset($payload[$image["banner"]]) ? $payload[$image["banner"]] : null;
            if ($file) {
                $extension = strtolower($file->getClientOriginalExtension());
                $folderName = 'group_' . $result->group_id . '/id_' . $result->id . '/';
                $fileName = "events_" . date("Ymdhis") . rand(11, 99) . '.' . $extension;
                $fullPathName = $folderName . $fileName;
                $uploadFullPathName = 'uploads/' . $fullPathName;

                Storage::disk('uploads')->put('/' . $fullPathName, file_get_contents($file));

                $result->image()->updateOrCreate(
                    [
                        'uploadable_id' => $result->id,
                        'type' => $image["type"],
                    ],
                    [
                        'name' => asset($uploadFullPathName),
                        'uploadable_id' => $result->id,
                        'mime_type' => $file->getMimeType(),
                        'extension' => $file->extension(),
                        'size' => $file->getSize(),
                        'type' => $image["type"]
                    ]
                );
            }
        }
    }
}
