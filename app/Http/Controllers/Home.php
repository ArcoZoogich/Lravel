<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home extends Controller
{
      //
    public function home(){
        return view('home.home');
    }
}