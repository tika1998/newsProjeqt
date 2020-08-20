<?php

namespace App\Contract;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;

interface NewsInterface {
    public function categoryNews($id);

    public function index();

    public function show($id);

    public function edit($id);

    public function store(NewsRequest $request);

    public function update(Request $request, $id);

    public function delete($id);

}
