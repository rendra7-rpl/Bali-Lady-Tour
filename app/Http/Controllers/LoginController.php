<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        return view('Backend.login');
    }

    public function akun(){
        return view('Backend.Account.akun');
    }

    public function add(){
        return view('Backend.Account.add');
    }
}
