<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    public function index($name)
    {
        $house = House::where('name', $name)->firstOrFail();
        // dd($house->owner->person->contact);
        return view('haalathu.reports.xhouse', compact('house'));
    }
}
