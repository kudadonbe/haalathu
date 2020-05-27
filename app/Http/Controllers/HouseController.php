<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\Person;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function show($name)
    {
        $house = House::where('name', $name)->firstOrFail();


        $items = DB::table('items')
            ->where('house_id', '=', $house->id)
            ->join('commodities', 'commodities.id', '=', 'items.commodity_id')
            ->select('items.*', 'commodities.name', 'commodities.unit')
            ->get();
        // dd($items);
        return view('haalathu.reports.house', compact('house', 'items'));
    }

    public function create()
    {
        // dd("in create form");
        return view('haalathu.houses.create');
    }

    public function store()
    {

        $house_info = request()->validate([
            'house_name' => 'required',
            'owner_nid'  => 'required',
        ]);
        $nid = request()->owner_nid;
        // dd($nid);
        $owner = Person::where('nid',$nid)->firstOrFail();
        
        // dd($owner);
        $house = [
            'person_id' => $owner->id,
            'name' => request()->house_name,
        ];

        dd($house);

        House::create($house);
        
    }
}
