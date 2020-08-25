<?php

namespace App\Services;

use App\Contract\NewsInterface;
use App\File;
use App\Helper;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsServices implements NewsInterface {

    private $news;

    public function __construct()
    {
        $this->news = new News();
    }

    public function categoryNews($id)
    {
        // TODO: Implement categoryNews() method.

        $news = News::whereHas('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->where('category_id', $id)->get();

        if (count($news) > 0) {
            return view('admin.category.showNewsCateg', compact('news'));
        } else {
            return back()->with('message', 'chka norutyun');
        }
    }

    public function index()
    {
        // TODO: Implement index() method.

        return $this->news::paginate(10);
    }

    public function show($id)
    {
        // TODO: Implement show() method.

        $news = News::whereHas('file', function ($query) use ($id){
            $query->where('news_id', $id);
        })->with('file')->get();


        if (isset($news)) {
            return view('admin.news.showNews', compact('news'));
        } else {
            return back();
        }

    }

    public function edit($id)
    {
        // TODO: Implement edit() method.

        $news = $this->news::find($id);

        if (isset($news)) {
            return view('admin.news.update', compact('news'));
        } else {
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.

        $news = $this->news::find($id);
        if ($news) {
            $news->update($request->all());
        } else {
            return back();
        }

    }

    public function store(NewsRequest $request)
    {
        // TODO: Implement store() method.
        $userId = $request->userId;

        $photo = Helper::image_upload($request);
        $news_all = $request->all();
        $news_all['avatar'] = $photo;

        $news = $this->news->create($news_all);

        Helper::upload_images($request->images,$news->id);

        if ($userId != null) {
            array_push($userId, Auth::id());
            $news->users()->syncWithoutDetaching($userId,['role' => 'edit']);
        } else {
            $news->users()->syncWithoutDetaching([Auth::id()]);
        }


        return back();
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.

        $news = $this->news::find($id);
        if ($news) {
            $news->delete();
            return redirect('/news');
        } else {
            return back();
        }
    }
}
