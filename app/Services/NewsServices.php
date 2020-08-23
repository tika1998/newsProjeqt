<?php

namespace App\Services;

use App\Contract\NewsInterface;
use App\Http\Requests\NewsRequest;
use App\News;
use App\NewsUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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

        $news = $this->news::find($id);

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

        $request['category_id'] = $request->category;
        $photo = time() . '.' .request()->avatar->getClientOriginalExtension();
        Image::make($_FILES['avatar']['tmp_name'])->resize(900, 550)->save(public_path() . '/images/avatar/' . $photo);
        $news_all = $request->all();
        $news_all['avatar'] = $photo;

        $news = $this->news->create($news_all);

//         File::create([
//            'news_id' => $news->id,
//            'name' => $photo,
//        ]);

        if ($userId != null) {
            array_push($userId, Auth::id());
            $news->users()->syncWithoutDetaching($userId);
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
