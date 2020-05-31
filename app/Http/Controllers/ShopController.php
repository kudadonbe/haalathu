<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Owner;
use App\Person;
use App\Shop;
use App\Stock;
use DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $shops = Shop::all();
        // dd($shops);
        return view('haalathu.shops.index', compact('shops'));
    }


    public function create()
    {
        // dd("in create form");
        return view('haalathu.shops.create');
    }

    public function store()
    {
        // dd("in store");
        // dd(request()->all());



        $shop_info = request()->validate([
            'shop_name' => ['required', 'unique:shops'],
            'person_nid'  => 'required',
            'atoll'  => 'required',
            'island'  => 'required',
            'contact'  => 'required',
        ]);
        // dd($shop_info);
        $nid = $shop_info['person_nid'];
        // dd($nid);
        $person = Person::where('nid', $nid)->firstOrFail();

        $owner_data = [
            'person_id' => $person->id,
        ];
        // dd($owner_data);

        $owner = Owner::create($owner_data);

        // dd($owner);
        $shop = [
            'owner_id' => $owner->id,
            'name' => $shop_info['shop_name'],
            'atoll' => $shop_info['atoll'],
            'island' => $shop_info['island'],
            'contact' => $shop_info['contact'],
            'img_url' => '/',
        ];


        // dd($shop);


        Shop::create($shop);

        return redirect('/haalathu/shops');
    }



    public function show($name)
    {

        $shop = Shop::where('name', $name)->firstOrFail();

        $stocks = DB::table('stocks')
            ->where('shop_id', '=', $shop->id)
            ->join('commodities', 'commodities.id', '=', 'stocks.commodity_id')
            ->select('stocks.*', 'commodities.name', 'commodities.unit')
            ->get();
        // dd($stocks);

        return view('haalathu.reports.shop', compact('shop', 'stocks'));
    }
}
