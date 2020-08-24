<?php

namespace App\Contract;

use Illuminate\Http\Request;

interface CategoryInterface
{
    public function create();

    public function store(Request $request);

    public function delete($id);
}
