<?php

namespace App\Http\Controllers;

use App\Contract\UserInterface;
use App\Http\Requests\AdminCreate;
use App\Http\Requests\EditUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userIterface;

    public function __construct(UserInterface $userIterface) {
        $this->userIterface = $userIterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userIterface->index();
        return view('admin.users.showAllUsers', compact('users'));
    }

    public function changeStatus($id) {
        return $this->userIterface->changeStatus($id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return $this->userIterface->create();
    }

    public function blockUser($id) {
        return $this->userIterface->blockUSer($id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreate $request)
    {
        return $this->userIterface->store($request);
    }

    public function verifyUser($token) {
        return $this->userIterface->verifyUser($token);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->userIterface->edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        return $this->userIterface->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return $this->userIterface->destroy($id);
    }
}
