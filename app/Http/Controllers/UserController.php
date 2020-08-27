<?php

namespace App\Http\Controllers;

use App\Contract\UserInterface;
use App\Exports\UsersExport;
use App\Helper;
use App\Http\Requests\AdminCreate;
use App\Http\Requests\EditUserRequest;
use App\Mail\AdminSuccess;
use App\Mail\SendExcelMail;
use App\Mail\VerifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;

class UserController extends Controller
{
    private $userIterface;

    public function __construct(UserInterface $userIterface)
    {
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

    public function changeStatus($id)
    {
        $email = $this->userIterface->changeStatus($id);

        Helper::email($email, new AdminSuccess());
        return back();
    }

    public function blockUSer($id)
    {
        $this->userIterface->blockUSer($id);
        return back();
    }

    public function verifyUser($token)
    {

        $verify = Helper::verifyUser($token);
       if ($verify == 'success') {
           return redirect('/login')->with('message', 'Your email verification is successful');
       }

       if ($verify == 'verified') {
           return redirect('/login')->with('message', 'Your email address has already been verified');
       }

        if ($verify == null) {
            return redirect('/')->with('message', 'sorry');
        }
    }

    public function exel()
    {
        return Excel::download(new UsersExport, 'users-list.xlsx');
    }

    public function export(Request $request)
    {
        Helper::email($request->emailName, new SendExcelMail());
        return back();
    }

    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreate $request)
    {
        $user = $this->userIterface->store($request);
        $token = sha1($user->email);
        $this->userIterface->verifyUsreCreate($user->id, $token);
        Mail::to($user->email)->send(new VerifyMail($user, $request->password));

        return redirect('/user/create')->with('message', 'create successful');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->userIterface->show($id);
        if ($user) {
            return view('admin.users.profile', compact('user'));
        } else {
            return abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return $this->userIterface->edit($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditUserRequest $request, $id)
    {
        return $this->userIterface->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = $this->userIterface->destroy($id);
        if ($delete) {
            return redirect('/user');
        }
    }
}
