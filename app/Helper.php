<?php


namespace App;


use Illuminate\Support\Facades\Storage;

class Helper
{
    public static function image_upload($request)
    {
        dd($request);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();

            Storage::disk('local')->put('image/' . $fileName, 'public');
            dd($fileName);
            return $fileName;
        }
    }
}
