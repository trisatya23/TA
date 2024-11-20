<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function manajemenuser(){
        return view('user.manajemenuser');
    }

    public function manajemenrole(){
        return view('user.manajemenrole');
    }
}
