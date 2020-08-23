<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\News;

class ApiNewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return  News::all();

        // return view('admin.news.allNews', compact('news'));
    }
    public function last()
    {
        return News::orderBy('id', 'desc')->take(5)->get();

        // return view('admin.news.allNews', compact('news'));
    }
}
