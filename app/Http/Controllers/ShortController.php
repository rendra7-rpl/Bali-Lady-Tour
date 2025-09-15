<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShortController extends Controller
{
    public function short(){
        return view('Backend.Short Content.sc');
    }
}
