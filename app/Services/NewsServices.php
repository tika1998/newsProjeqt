<?php

namespace App\Services;

use App\Contract\NewsInterface;
use App\File;
use App\Helper;
use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsServices implements NewsInterface
{

    private $news;

    public function __construct()
    {
        $this->news = new News();
    }


    public function index()
    {
        // TODO: Implement index() method.

        return $this->news::paginate(10);
    }

    public function show($id)
    {
        // TODO: Implement show() method.

        return News::where('id', $id)->with('file')->get();

    }

    public function edit($id)
    {
        // TODO: Implement edit() method.

        return $this->news::find($id);


    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.

        $news = $this->news::find($id);

        return $news->update($request->all());


    }

    public function store(NewsRequest $request)
    {
        // TODO: Implement store() method.
        $userId = $request->userId;

        $photo = Helper::image_upload($request);
        $news_all = $request->all();
        $news_all['avatar'] = $photo;

        $news = $this->news->create($news_all);

        Helper::upload_images($request->images, $news->id);

        if ($userId != null) {
            array_push($userId, Auth::id());
            $news->users()->syncWithoutDetaching($userId);
        } else {
            $news->users()->syncWithoutDetaching([Auth::id()]);
        }


        return $news;
    }

    public function categoryNews($id)
    {
        // TODO: Implement categoryNews() method.

        $news = News::whereHas('users', function ($query) {
            $query->where('user_id', Auth::id());
        })->where('category_id', $id)->get();

        return $news;
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.

        $news = $this->news::find($id);
        if ($news) {
            return $news->delete();
        } else {
            return false;
        }
    }
}
