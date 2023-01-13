<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request) {
        $validateData = $request->validate([
            'username' => 'required|min:5|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|alpha_num|confirmed|min:6',
        ]);


        $user = new User();
        $user->username = $validateData['username'];
        $user->email = $validateData['email'];
        $user->password = $validateData['password'];

        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);


        $user->save();
        return redirect('/login');
    }

    public function login(Request $request) {
        $validateData = $request->validate([
            'username' => 'required',
            'password' => 'required|alpha_num|min:6',
        ]);


        $user = new User();
        $user->username = $validateData['username'];
        $user->password = $validateData['password'];

        // $users = User::query()
        // ->Where('email', 'LIKE', $request->email)
        // ->get();

        if(Auth::attempt(['username'=>$request->username, 'password'=>$request->password], true)) {
            if(Auth::user()->role == 'admin' || Auth::user()->role == 'pengajar') {
                return view('admin.home_page');
            }
            return view('member.home_page');
        }
        return redirect()->back();
    }
}
