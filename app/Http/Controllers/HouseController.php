<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\Owner;
use App\Person;
use Illuminate\Support\Facades\DB;

use function GuzzleHttp\Promise\all;

class HouseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
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
            'atoll'  => 'required',
            'island'  => 'required',
        ]);

        // dd($house_info);
        $nid = request()->owner_nid;

        // dd($nid);

        $person = Person::where('nid', $nid)->firstOrFail();
        // dd($person);

        $owner_data = [
        'person_id' => $person->id,
        ];

        // dd($owner_data);

        $owner = Owner::create($owner_data);
        // dd($owner);
        $house = [
            'owner_id' => $owner->id,
            'name' => request()->house_name,
            'atoll'  => request()->atoll,
            'island'  => request()->island,
        ];

        // dd($house);

        House::create($house);

        return redirect('/haalathu/houses');
    }

    public function index()
    {
        $houses = House::all();
        
        if ($houses == null) {
            return redirect('/haalathu/house/create');
        }else {
            return view('haalathu.houses.index', compact('houses'));
        }
        
    }

    public function show($name)
    {
        $house = House::where('name', $name)->firstOrFail();
        // dd($house);
        $items = DB::table('items')
            ->where('house_id', '=', $house->id)
            ->join('commodities', 'commodities.id', '=', 'items.commodity_id')
            ->select('items.*', 'commodities.name', 'commodities.unit')
            ->get();
        // dd($items);
        return view('haalathu.reports.house', compact('house', 'items'));
    }
}
