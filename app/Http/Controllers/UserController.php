<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminCreate;
use App\Mail\AdminMail;
use App\Mail\AdminSuccess;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.users.showAllUsers', compact('users'));
    }

    public function changeStatus($id) {
        $user = User::find($id);
        $email = $user->email;
        $user->update(['status' => 'success']);
        Mail::to($email)->send(new AdminSuccess());
        return back();
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCreate $request)
    {
        $email = $request->input('email');
//       $r =  URL::signedRoute('unsubscribe', ['user' => 1]);
        $pass = $request->input('password');
        $hashPass = Hash::make($pass);
        $userAdm = $request->all();
        $userAdm['password'] = $hashPass;
        User::create($userAdm);


        Mail::to($email)->send(new AdminMail());
        // view('message', compact('email'));
        return back();
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
        $user = User::find($id);

        if ($user) {
            return view('admin.users.updateUser', compact('user'));
        }   else {
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd('sas');
        $user = User::find($id);
        $user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
