<?php

namespace App\Http\Controllers;

use App\House;
use App\Person;
use Illuminate\Http\Request;
use Redirect;

class PersonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $people = Person::all();
        // dd($people);
        return view('haalathu.people.index', compact('people'));
    }



    public function show($nid)
    {
        $person = Person::where('nid', $nid)->firstOrFail();
        // dd($person);

        return view('haalathu.people.show', compact('person'));
    }


    public function create()
    {
        // dd("in create form");
        return view('haalathu.people.create');
    }

    public function store()
    {

        $person = request()->validate([
            'nid'  => ['required', 'unique:people'],
            'name' => 'required',
            'dob' => 'required',
            'contact' => 'required',
            'gender' => 'required',
        ]);


        Person::create($person);
        return redirect('haalathu/people');
    }

    public function edit($nid)
    {
        // dd($nid);
        $person = Person::where('nid', $nid)->firstOrFail();
        return view('haalathu.people.edit', compact('person'));
    }

    public function update($nid)
    {
        // dd($nid);
        $person_update = request()->validate([
            'nid' => 'required',
            'name' => 'required',
            'name' => 'required',
            'dob' => 'required',
            'contact' => 'required',
            'gender' => 'required',
        ]);

        $person = Person::where('nid', $nid)->firstOrFail();


        $person->update($person_update);
        $path = '/haalathu/person/' . request()->nid;
        // dd($path);
        return Redirect($path);
    }
}
