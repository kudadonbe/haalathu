<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function haalathu()
    {
        return view('haalathu.welcome');
    }

    public function bayaan()
    {
        return view('bayaan');
    }
  

    
}
