<?php

namespace App\Http\Controllers;

use App\Contract\NewsInterface;
use App\Http\Requests\NewsRequest;
use App\News;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $news =  News::all();
//        $news = News::whereHas('users', function ($query) {
//            $query->where('user_id', Auth::id());
//        })->paginate(9);
        //dd($news);
        return $news;
       // return view('admin.news.allNews', compact('news'));
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
        $users = User::all();
        return view('admin.news.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        return $this->newsInterface->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->newsInterface->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->newsInterface->edit($id);
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
        $this->newsInterface->update($request, $id);

        return redirect('/news');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->newsInterface->delete($id);
    }
}
