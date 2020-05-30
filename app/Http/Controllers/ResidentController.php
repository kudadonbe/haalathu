<?php

namespace App\Http\Controllers;

use App\Person;
use App\Owner;
use App\House;
use App\Resident;
use Carbon\Traits\Test;
use Faker\ORM\CakePHP\Populator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResidentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store()
    {
        // dd(request()->all());
        $resid_info = request()->validate([
            'house_id' => 'required',
            'nid'  => 'required',

        ]);

        // dd($resid_info);

        $nid = request()->nid;
        $house_id = request()->house_id;

        // dd($nid);
        // dd($house_id);

        $person = Person::where('nid', $nid)->firstOrFail();
        // dd($person);

        $resid_data = [
            'person_id' => $person->id,
            'house_id' => $house_id,
        ];

        // dd($resid_data);

        $resdent = Resident::create($resid_data);
        // dd($resdent);

        $path = '/haalathu/' . $house_id . '/residents';
        // dd($path);
        return redirect($path);
    }

    public function index($house_id)
    {
        // dd('in index method');
        // dd($house_id);

        $house = House::where('id', $house_id)->firstOrFail();
        // dd($house);
        $residents = Resident::where('house_id', $house_id)->get();
        // dd($houses);

        $people = [];
        foreach ($residents as $resident) {
            $person = Person::find($resident->person_id);
            $people[] = $person;
        }
        // dd($residents);
        // dd($people);

        return view('haalathu.houses.residents.index', compact('people', 'house'));
    }
}
