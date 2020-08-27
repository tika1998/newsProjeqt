<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        $news = null;
        $name = $request->q;
        if ($name != '') {
            $news = News::where('title', 'LIKE', '%' . $name . '%')->first();

            if ($news) {
                return view('admin.news.result', compact('news'));
            } else {
                return redirect('searchNot')->with('text', 'Please enter correct lalala');
            }
        } else {
            return redirect('searchNot')->with('message', 'no result');
        }
    }

    public function index() {
        return view('admin.news.result');
    }
}
