<?php

namespace App\Http\Controllers\Api;


use App\Category;
use App\Http\Controllers\Controller;
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
        return  Category::all();

        // return view('admin.news.allNews', compact('news'));
    }

    public function categoryNews($id)
    {
        // TODO: Implement categoryNews() method.

        $news = News::with('category')->where('category_id', $id)->get();

        return $news;
//        if (count($news) > 0) {
//            return $news;
//        } else {
//            return back()->with('message', 'chka norutyun');
//        }
    }

}
