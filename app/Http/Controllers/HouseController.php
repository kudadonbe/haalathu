<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use App\Owner;
use App\Person;
use App\Resident;
use Carbon\Carbon;
use DateTimeZone;
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
        $nid = $house_info['owner_nid'];

        // dd($nid);

        $person = Person::where('nid', $nid)->firstOrFail();
        // dd($person);

        $owner_data = [
            'person_id' => $person->id,
            'property_code' => uniqid(),
        ];

        // dd($owner_data);

        $owner = Owner::create($owner_data);
        $house = [
            'owner_id' => $owner->id,
            'name' => $house_info['house_name'],
            'atoll'  => $house_info['atoll'],
            'island'  => $house_info['island'],
        ];


        House::create($house);
        // dd($owner);
        // dd($house);

        return redirect('/haalathu/houses');
    }

    public function index()
    {
        $houses = House::all();

        if ($houses == null) {
            return redirect('/haalathu/house/create');
        } else {
            return view('haalathu.houses.index', compact('houses'));
        }
    }

    public function show($id)
    {
        // dd('test');
        $house = House::find($id)->firstOrFail();
        // dd($house);
        // ppl status calcilations
        $residents = Resident::where('house_id', $id)->get();


        $ppl = [];
        // $totalresidents = 0;
        foreach ($residents as $resident) {
            $rperson = Person::find($resident->person_id);
            $ppl[] = $rperson;
        }

        $preg_status = [];
        $med_status = [];
        $sp_care_status = [];
        $dob_status = [];

        foreach ($ppl as $p) {


            $preg_status[] = $p->preg;
            $med_status[] = $p->med;
            $sp_care_status[] = $p->sp_care;
            $dob_status[] = Carbon::parse($p->dob)->age;
            // $mydob = Carbon::parse($p->dob)->age;
            // dd($mydob->age);
        }

        $pregObj = collect($preg_status);
        $medObj = collect($med_status);
        $sp_careObj = collect($sp_care_status);
        $dobObj = collect($dob_status);

        // dd($dobObj);

        // $collection = collect([1, 2, 3, 4]);

        $age12 = $dobObj->filter(function ($value, $key) {
            return $value <= 12;
        });
        $age65 = $dobObj->filter(function ($value, $key) {
            return $value >= 65;
        });


        // $subset->all();

        // [1, 2]

        // $up65 = $age65->count();
        // $down12 = $age12->count();
        $pregs = $pregObj->countBy();
        $meds = $medObj->countBy();
        $sp_cares = $sp_careObj->countBy();
        // dd($pregs);

        function neh($var)
        {
            if ($var == 0) {
                $nethey = "ނެތް";
            } else {
                $nethey = $var;
            }
            return $nethey;
        }

        $data = [
            'up65' => neh($age65->count()),
            'down12' => neh($age12->count()),
            'residents' => neh($residents->count()),
            'preg' => neh($pregs->get(1)),
            'med' => neh($meds->get(1)),
            'sp_care' => neh($sp_cares->get(1)),
        ];
        $dataObj = collect($data);
        // dd($dataObj);

        // item calculation
        $items = DB::table('items')
            ->where('house_id', '=', $house->id)
            ->join('commodities', 'commodities.id', '=', 'items.commodity_id')
            ->select('items.*', 'commodities.name', 'commodities.unit', 'commodities.img_url')
            ->get();


        // dd($items);

        return view('haalathu.houses.show', compact('house', 'items', 'dataObj'));
    }

    public function edit($id)
    {
        // dd('in edit form');
        // dd($nid);
        // $house = House::where('id', $id)->firstOrFail();
        $house = House::find($id)->firstOrFail();
        // dd($house);

        return view('haalathu.houses.edit', compact('house'));
    }

    public function update()
    {
        // dd('in update controller');
        $house_info = request()->validate([
            'house_id' => 'required',
            'house_name' => 'required',
            'owner_nid'  => 'required',
            'atoll'  => 'required',
            'island'  => 'required',
        ]);

        // dd($house_info);

        $nid = $house_info['owner_nid'];
        // dd($nid);

        $person = Person::where('nid', $nid)->firstOrFail();

        $house = House::find($house_info['house_id'])->firstOrFail();

        $owner_id = $house->owner_id;

        $owner = Owner::find($owner_id)->firstOrFail();

        $old_owner = $owner->person_id;
        $new_owner = $person->id;



        if ($old_owner == $new_owner) {
            // dd('old owner');
        } else {
            // dd(' a new owner');
            $owner_data = [
                'person_id' => $new_owner,
            ];
            $owner->update($owner_data);
        }

        $house_data = [
            'name' => $house_info['house_name'],
            'atoll'  => $house_info['atoll'],
            'island'  => $house_info['island'],
        ];


        $house->update($house_data);
        $path = '/haalathu/house/' . $house->id;
        // dd($path);
        return redirect($path);
    }
}
