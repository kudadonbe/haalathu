<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Shop;
use App\Stock;
use DB;
use Illuminate\Http\Request;

class ShopController extends Controller
{
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
