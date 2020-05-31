<?php

namespace App\Http\Controllers;

use App\Commodity;
use App\House;
use App\Item;
use Illuminate\Http\Request;
use App\Libranies;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store()
    {
        // dd(request()->all());
        $item_info = request()->validate([
            'house_id' => 'required',
            'item_name'  => 'required',
            'qty'  => 'required',

        ]);

        // dd($item_info);

        // dd($house_id);
        // dd($comm_name);

        $comm = Commodity::where('name', $item_info['item_name'])->firstOrFail();
        // dd($comm);

        $item_data = [
            'commodity_id' => $comm->id,
            'house_id' => $item_info['house_id'],
            'qty' => $item_info['qty'],
        ];

        // dd($item_data);

        Item::create($item_data);
        // dd($add_item);

        $path = '/haalathu/' . $item_info['house_id'] . '/items';
        // dd($path);
        return redirect($path);
    }


    public function index($house_id)
    {
        // dd('in index method');
        // dd($house_id);

        $house = House::where('id', $house_id)->firstOrFail();
        // dd($house);


        // data needed for Item
        // 1. name
        // 2. qty
        // 3. unit

        $items = DB::table('items')
            ->where('house_id', '=', $house->id)
            ->join('commodities', 'commodities.id', '=', 'items.commodity_id')
            ->select('items.*', 'commodities.name', 'commodities.unit', 'commodities.img_url')
            ->get();

        // items of this house
        // $itemsList = Item::where('house_id', $house_id)->get();
        // dd($items);

        // $items = [];
        // foreach ($itemsList as $itemList) {
        //     $comm = Commodity::find($itemList->commodity_id);
        //     // dd($itemData);
        //     $items[] = [
        //         'name' => $comm->name,
        //         'qty' => $itemList->qty,
        //         'unit' => $itemList->unit,
        //     ];
        // }
        // dd($items);


        return view('haalathu.houses.items.index', compact('items', 'house'));
    }
}
