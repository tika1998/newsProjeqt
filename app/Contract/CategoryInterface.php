<?php

namespace App\Contract;

use Illuminate\Http\Request;

interface CategoryInterface
{
    public function index();

    public function store(Request $request);

    public function update(Request $request, $id);

    public function delete($id);
}
