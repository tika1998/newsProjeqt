<?php

namespace App\Contract;

use App\Http\Requests\AdminCreate;
use App\Http\Requests\EditUserRequest;

interface UserInterface
{
    public function index();

    public function changeStatus($id);

    public function create();

    public function blockUSer($id);

    public function verifyUser($token);

    public function store(AdminCreate $request);

//    public function show($id);

    public function edit($id);

    public function update(EditUserRequest $request, $id);

    public function destroy($id);


}
