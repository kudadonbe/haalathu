<?php

namespace App\Http\Controllers;

use App\Shop;
use App\Stock;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($name)
    {
        
        $shop = Shop::where('name', $name)->firstOrFail();

        return view('haalathu.reports.xshop', compact('shop'));
    }

}
