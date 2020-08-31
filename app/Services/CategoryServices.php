<?php

namespace App\Services;

use App\Category;
use App\Contract\CategoryInterface;
use Illuminate\Http\Request;

class CategoryServices implements CategoryInterface
{

    private $category;

    public function __construct()
    {
        $this->category = new Category();
    }

    public function index()
    {
        return Category::all();
    }

    public function store(Request $request)
    {
        // TODO: Implement store() method.
        return Category::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.

        $category = Category::findOrFail($id);
        if ($category) {
            $category->update($request->all());
            session()->forget('val');
            return $category;
        }

    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $cat = Category::findOrFail($id);
        if ($cat) {
            return $cat->delete();
        }
    }
}
