<?php

namespace App\Http\Controllers;

use App\House;
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
        // $house = House::find(1);
        // dd($house->name);

        

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
