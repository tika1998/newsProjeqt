<?php

namespace App\Services;

use App\Contract\Request;
use App\Contract\UserInterface;
use App\Http\Requests\AdminCreate;
use App\Mail\AdminMail;
use App\Mail\AdminSuccess;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class UserServices implements UserInterface
{
    public function index()
    {
        // TODO: Implement index() method.
        $users = User::all();
        return $users;
    }

    public function changeStatus($id)
    {
        // TODO: Implement changeStatus() method.

        $user = User::find($id);
        $email = $user->email;
        $user->update(['status' => 'success']);
        Mail::to($email)->send(new AdminSuccess());
        return back();
    }

    public function create()
    {
        // TODO: Implement create() method.
        return view('admin.users.create');
    }

    public function store(AdminCreate $request)
    {
        // TODO: Implement store() method.

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

    public function edit($id)
    {
        // TODO: Implement edit() method.
        $user = User::find($id);

        if ($user) {
            return view('admin.users.updateUser', compact('user'));
        } else {
            return back();
        }
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
        $user = User::find($id);

        if ($user) {
            $user->update($request->all());
            return back();
        } else {
            return back();
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return redirect('/user');
        } else {
            return back();
        }
    }

}
