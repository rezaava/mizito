<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Auth;

class AuthController extends Controller
{
    //

    public function register(){
        return view("register");
    }

    public function registerPost(Request $req){
        $user = new User;
        $user->name = $req->name;
        $user->family = $req->family;
        $user->mobile = $req->mobile;
        $user->password = $req->password;
    }
    public function login(){
        return view("login");
    }

    public function loginPost(Request $req){
        
    }
}
