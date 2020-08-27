<?php

namespace App\Services;

use App\Helper;
use App\User;
use App\Contract\UserInterface;
use App\Http\Requests\AdminCreate;
use App\Mail\AdminMail;
use App\Mail\AdminSuccess;
use App\Mail\VerifyMail;
use App\VerifyUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\EditUserRequest;

class UserServices implements UserInterface
{

    private $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        // TODO: Implement index() method.
        return $this->user::all();
    }

    public function store(AdminCreate $request)
    {
        // TODO: Implement store() method.
        $userAdm = $request->all();
        $user = $this->user::create($userAdm);
        return $user;
    }

    public function show($id)
    {
        // TODO: Implement show() method.

        $user = $this->user::findOrFail($id);

        return $user;
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.

        $user = $this->user::findOrFail($id);

        if ($user) {
            return view('admin.users.updateUser', compact('user'));
        } else {
            return back();
        }
    }

    public function update(EditUserRequest $request, $id)
    {
        // TODO: Implement update() method.

        $user = $this->user::findOrFail($id);
        $user->update($request->all());
        return $user;

    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $user = $this->user::find($id);
        if ($user) {
            return $user->delete();
        } else {
            return back();
        }
    }

    public function blockUSer($id)
    {
        $user = $this->user::findOrFail($id);
        if ($user->status !== 'block') {
            $user->update(['status' => 'block']);
        } else {
            $user->update(['status' => 'success']);
        }
        return $user;
    }

    public function changeStatus($id)
    {
        $user = User::findOrFail($id);
        $user->update(['status' => 'success']);

        return $user->email;
    }

    public function verifyUsreCreate($id, $token)
    {
        VerifyUser::create([
            'user_id' => $id,
            'token' => $token
        ]);
    }
}
