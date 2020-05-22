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
        if ($report == "shop") {
            return view('haalathu.reports.shop');

        } elseif ($report == "house") {

            return view('haalathu.reports.house');
        } else {

            return view('haalathu.welcome');
        }
    }
    //
}
