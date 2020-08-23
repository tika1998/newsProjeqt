<?php


namespace App;


use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Helper
{
    public static function image_upload($request)
    {
        $photo = time() . '.' .request()->avatar->getClientOriginalExtension();
        Image::make($_FILES['avatar']['tmp_name'])->resize(900, 550)->save(public_path() . '/images/avatar/' . $photo);

        return $photo;
    }
}
