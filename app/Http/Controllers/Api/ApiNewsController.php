<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\News;
use Illuminate\Support\Facades\Auth;

class ApiNewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */

    public function index()
    {
        $news = News::get();

        return NewsResource::collection($news);

    }

    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */

    public function last()
    {
        $news = News::orderBy('id', 'desc')->take(5)->get();
        return NewsResource::collection($news);
    }


    function news($id) {
        $news = News::find($id);
        return new NewsResource($news);
    }
}
