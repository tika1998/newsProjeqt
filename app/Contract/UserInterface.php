<?php

namespace App\Contract;

use App\Http\Requests\AdminCreate;

interface UserInterface
{
    public function index();

    public function changeStatus($id);

    public function create();

    public function store(AdminCreate $request);
//
//    public function show($id);
//
    public function edit($id);

    public function update(Request $request, $id);

    public function destroy($id);


}
