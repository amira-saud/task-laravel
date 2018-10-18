<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function index()
    {
    $users = User::all();
    //dd($users);
    //return View::make('users')->with('users', $users);
    return view('users.index',[
        'users' => $users
    ]);
    }
}
