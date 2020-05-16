<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class haalathuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('haalathu.home');
    }
    
    public function report($report)
    {
        if ($report == "sreport") {

            return view('haalathu.sreport');
        } elseif ($report == "hreport") {

            return view('haalathu.hreport');
        } else {

            return view('haalathu.home');
        }
    }
    //
}
