<?php

namespace App\Http\Controllers;

use App\Commodity;
use Illuminate\Http\Request;

class CommodityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        // dd("in create form");
        return view('haalathu.commodities.create');
    }

    public function store()
    {
        $commodity = request()->validate([
            'name' => ['required', 'unique:commodities'],
            'unit' => 'required',
            // 'size' => 'required',
            // 'weight'  => 'required',
        ]);

        // dd($commodity);

        Commodity::create($commodity);

        return redirect('/haalathu/commodities');
        
    }

    public function index()
    {
        $commodities = Commodity::all();
        // dd($commodities);
        return view('haalathu.commodities.index', compact('commodities'));
    }

    public function show($name)
    {
        $commodity = Commodity::where('name', $name)->firstOrFail();
        
        // dd($commodity);

        return view('haalathu.commodities.show', compact('commodity'));
    }

    public function edit($name)
    {
        
        // dd($name);
        $commodity = Commodity::where('name', $name)->firstOrFail();
        // dd($commodity);
        
        return view('haalathu.commodities.edit', compact('commodity'));
    }

    public function update($name)
    {
        // dd($name);

        $commodity_update = request()->validate([
            'name' => 'required',
            'unit' => 'required',
        ]);

        // dd($commodity_update);

        $commodity = Commodity::where('name', $name)->firstOrFail();
        
        // dd($commodity);
        // dd($commodity->name);
        
        $commodity->update($commodity_update);
        $path = '/haalathu/commodity/' . $commodity->name;

        return Redirect($path);
    }


}
