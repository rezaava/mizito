<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function register()
    {
        return view('register');
    }

    public function registerPost(Request $req)
    {
        $user = new User;
        $user->name = $req->name;
        $user->family = $req->family;
        $user->mobile = $req->mobile;
        $user->password = bcrypt($req->password);
        $user->save();

        return redirect('/login')->with('success', 'ثبت نام با موفقیت انجام شد');
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $req)
    {
        $user = User::where('mobile', $req->mobile)->first();
        if ($user) {
            if (Hash::check($req->password, $user->password)) {
                Auth::login($user);

                return redirect('/')->with('success', 'با موفقیت وارد شدید');
            }
        }

        return redirect('/login')->with('error', 'نام کاربری یا رمز عبور اشتباه است');
    }
}
