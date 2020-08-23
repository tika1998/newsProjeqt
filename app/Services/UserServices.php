<?php

namespace App\Services;
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
        return  $this->user::all();
    }

    public function changeStatus($id)
    {
        // TODO: Implement changeStatus() method.

        $user = $this->user::find($id);
        $email = $user->email;
        $user->update(['status' => 'success']);
        Mail::to($email)->send(new AdminSuccess());
        return back();
    }

    public function blockUSer($id) {
        $user = $this->user::find($id);
        if ($user->status !== 'block') {
            $user->update(['status' => 'block']);
        } else {
            $user->update(['status' => 'success']);
        }
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

        $pass = $request->input('password');
        $hashPass = Hash::make($pass);
        $userAdm = $request->all();
        $userAdm['password'] = $hashPass;
        $user = $this->user::create($userAdm);

         VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1($user->email)
        ]);
        Mail::to($user->email)->send(new VerifyMail($user, $pass));

        return back();
    }

    public function verifyUser($token)
    {
        $verifyUser = VerifyUser::where('token', $token)->first();

        if($verifyUser != null){
            $user = $verifyUser->user;
            if(!$user->verified) {
                $verifyUser->user->verified = 1;
                $verifyUser->user->save();
                $text = "duq ancaq verifikacian";
            } else {
              //  $verifyUser::dropColumn('token');
//                Schema::table('verify_users', function($table) {
//                    dd($table);
//                    $table->dropColumn('token');
//                });
                $text = "dzer emaile arden ancel  e verifikcia";
            }
        } else {
            return redirect('/')->with('error', "soooo Sorry");
        }
        return redirect('/')->with('message', $text);
    }


    public function show($id)
    {
        // TODO: Implement show() method.

        $user = $this->user::find($id);

        if ($user) {
            return view('admin.users.profile', compact('user'));
        } else {
            return abort('404');
        }
    }


    public function edit($id)
    {
        // TODO: Implement edit() method.
        $user = $this->user::find($id);

        if ($user) {
            return view('admin.users.updateUser', compact('user'));
        } else {
            return back();
        }
    }

    public function update(EditUserRequest $request, $id)
    {
        // TODO: Implement update() method.

        $hashPass = Hash::make($request->password);
        $user = $this->user::find($id);
        $request['password'] = $hashPass;
        if ($user) {
            $user->update($request->all());
            return redirect('user')->with('message', 'edit successfully');
        } else {
            return back();
        }
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        $user = $this->user::find($id);
        if ($user) {
            $user->delete();
            return redirect('/user');
        } else {
            return back();
        }
    }

}
