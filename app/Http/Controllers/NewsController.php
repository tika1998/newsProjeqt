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
        $news = News::whereHas('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->paginate(9);
        return view('admin.news.allNews', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function categoryNews($id)
    {
       $news = $this->newsInterface->categoryNews($id);
        if (count($news) > 0) {
            return view('admin.category.showNewsCateg', compact('news'));
        } else {
            return back()->with('message', 'chka norutyun');
        }
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
        $news = $this->newsInterface->store($request);

        if ($news) {
            return redirect('/news/create')->with('message', 'Create success');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = $this->newsInterface->show($id);

        if (isset($news)) {
            return view('admin.news.showNews', compact('news'));
        } else {
            return back();
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = $this->newsInterface->edit($id);
        if (isset($news)) {
            return view('admin.news.update', compact('news'));
        } else {
            return back();
        }
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

       $news = $this->newsInterface->update($request, $id);

       if ($news) {
           return redirect('/news')->with('message', 'Update success');
       } else {
           return redirect('/news')->with('error', 'Update error');
       }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news = $this->newsInterface->delete($id);

        if ($news) {
            return redirect('/news');
        } else {
            return back();
        }
    }
}
