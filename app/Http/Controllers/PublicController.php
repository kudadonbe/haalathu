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
    public function newuser()
    {

        return view('haalathu.register');
    }

    public function index()
    {
        return view('haalathu.home');
    }
    public function report($report){
        if($report == "sreport"){

            return view('haalathu.sreport');
        }
        elseif($report == "hreport"){

            return view('haalathu.hreport');
        }
        else{
            
            return view('haalathu.home');
        }
        
    }
}
