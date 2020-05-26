<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\DB;

class HouseController extends Controller
{
    public function index($name)
    {
        $house = House::where('name', $name)->firstOrFail();


        $items = DB::table('items')
            ->where('house_id', '=', $house->id)
            ->join('commodities', 'commodities.id', '=', 'items.commodity_id')
            ->select('items.*', 'commodities.name', 'commodities.unit')
            ->get();
        // dd($items);
        return view('haalathu.reports.xhouse', compact('house', 'items'));
    }
}
