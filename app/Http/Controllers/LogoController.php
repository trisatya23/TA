<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoController extends Controller
{
    public function manajemenlogo(){
        return view('logo.manajemenlogo');
    }
}
