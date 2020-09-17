<?php

namespace App\Services;

use App\Model\Art;
use Illuminate\Http\Request;
use Auth;

class FileUpload {

    static function ArtUploadFile(Request $request)
    {
        $file_extention = $request['file']->getClientOriginalExtension();
        // File Name Structure: TimeUploaded_UserWhoUpload.FileExtension
        $file_name = time().rand(99,999).'_'.\Auth::user()->name.'.'.$file_extention;
        $file_path = $request['file']->storeAs('public/artwork', $file_name);

        return $file_name;
    }
}
