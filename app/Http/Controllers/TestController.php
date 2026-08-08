<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class TestController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
    public function projects()
    {
        return view('projects');
    }
    public function tasks()
    {
        return view('tasks');
    }
    public function messages()
    {
        return view('messages');
    }
}
