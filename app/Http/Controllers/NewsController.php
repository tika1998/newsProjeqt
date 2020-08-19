<?php

namespace App\Http\Controllers;

use App\Contract\NewsInterface;
use App\File;
use App\Helper;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    private $newsInterface;

    public function __construct(NewsInterface $newsInterface)
    {
        $this->newsInterface = $newsInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $news = News::all();
        return view('admin.news.allNews', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function categoryNews($id)
    {
        return $this->newsInterface->categoryNews($id);
    }


    function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['category_id'] = $request->category;
        $news = News::create($request->all());
        $file = File::create([
            'news_id' => $news->id,
            'name' => Helper::image_upload($request),
        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
