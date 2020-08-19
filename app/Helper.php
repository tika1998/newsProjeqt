<?php


namespace App;


use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function image_upload($request)
    {
            $image = $request->image;
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put('image/' . $fileName, 'public');
            dd($fileName);
            return $fileName;
    }
}
