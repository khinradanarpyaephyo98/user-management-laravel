<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::with('role')->get();
        return view('users.users-list',compact('users'));
    }

    public function create()
    {
        $users = User::with('role')->get();
        return view('users.users-list',compact('users'));
    }

    public function fetch(){
        return view('users.createUser');
    }

}
