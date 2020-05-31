<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\Shop;
use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        // dd(request()->all());
        $stock_data = request()->validate([
            'shop_id' => 'required',
            'stock_name'  => 'required',
            'qty'  => 'required',

        ]);

        // dd($stock_data);
        $comm = Commodity::where('name', $stock_data['stock_name'])->firstOrFail();
        // dd($comm);

        $stock_info = [
            'commodity_id' => $comm->id,
            'shop_id' => $stock_data['shop_id'],
            'qty' => $stock_data['qty'],
        ];

        // dd($stock_info);

        $add_stock = Stock::create($stock_info);

        // dd($add_stock);

        $path = '/haalathu/' . $stock_info['shop_id'] . '/stocks';
        // dd($path);
        return redirect($path);
    }

    public function index($shop_id)
    {
        // dd('in index method');
        // dd($house_id);

        $shop = Shop::where('id', $shop_id)->firstOrFail();
        // dd($shop);
        // items of this house
        $stocksList = Stock::where('shop_id', $shop_id)->get();
        // dd($stocksList);


        // data needed for Item
        // 1. name
        // 2. qty
        // 3. unit

        $stocks = DB::table('stocks')
            ->where('shop_id', '=', $shop->id)
            ->join('commodities', 'commodities.id', '=', 'stocks.commodity_id')
            ->select('stocks.*', 'commodities.name', 'commodities.unit', 'commodities.img_url')
            ->get();
        // dd($stocks);


        // $stocks = [];
        // foreach ($stocksList as $stockList) {
        //     $comm = Commodity::find($stockList->commodity_id);
        //     dd($stockList);
        //     $stocks[] = [
        //         'name' => $comm->name,
        //         'qty' => $stockList->qty,
        //         'unit' => $stockList->unit,
        //     ];
        // }
        // dd($stocks);



        return view('haalathu.shops.stocks.index', compact('stocks', 'shop'));
    }
}
