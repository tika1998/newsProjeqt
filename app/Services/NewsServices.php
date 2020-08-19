<?php

namespace App\Services;

use App\Contract\NewsInterface;
use App\News;

class NewsServices implements NewsInterface {

    public function categoryNews($id)
    {
        // TODO: Implement categoryNews() method.

        $news = News::whereHas('category', function ($query) use ($id) {
            $query->where('category_id', $id);
        })->with('category')->get();
        //dd($news[0]->category->name);
//        foreach ($news as $new){
//            dump($new->category->name);
//        }
//        dd($news);

        if (count($news) > 0) {
            return view('admin.category.showNewsCateg', compact('news'));
        } else {
            return back()->with('message', 'chka norutyun'); //??
        }
    }
}
