<?php


namespace App;

use App\Mail\SendExcelMail;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;

class Helper
{
    public static function image_upload($request)
    {
        $photo = time() . '.' .request()->avatar->getClientOriginalExtension();
        Image::make($_FILES['avatar']['tmp_name'])->resize(900, 550)->save(public_path() . '/images/avatar/' . $photo);

        return $photo;
    }


    public static function upload_images($images, $news_id) {
        $img = new File();
        foreach ($images as $image) {
            $image_name = uniqid() . '.' . $image->getClientOriginalExtension();
            $path = public_path('/images');
            $images = Image::make($image->getRealPath());
            $images->resize(400, 244, function ($constraint) {
                $constraint->aspectRatio();
            })->save($path . '/' . $image_name);

            $img->create([
                'name'=>$image_name,
                'news_id' => $news_id
            ]);
        }
        return true;
    }

    public static function email($value, $class) {
        Mail::to($value)->send($class);
        return true;
    }
}
