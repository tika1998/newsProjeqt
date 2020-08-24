<?php

namespace App\Services;

use App\Category;
use App\Contract\CategoryInterface;
use Illuminate\Http\Request;

class CategoryServices implements CategoryInterface {

    private $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        Category::create($request->all());

        return back()->with('message', 'Created successfully');
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $cat = Category::find($id);
        if ($cat) {
            $cat->delete();
            return redirect('/news');
        } else {
            return back();
        }
    }
}
