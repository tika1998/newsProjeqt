<?php

namespace App\Http\Controllers\Api;


use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\NewsResource;
use App\News;
use Illuminate\Support\Facades\Auth;

class ApiCategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $categ = Category::all();

        return CategoryResource::collection($categ);
    }

    public function categoryNews($id)
    {
        // TODO: Implement categoryNews() method.

        $news = News::with('category')->where('category_id', $id)->get();
        return NewsResource::collection($news);

    }

}
