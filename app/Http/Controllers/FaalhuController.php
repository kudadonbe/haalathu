<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;


class FaalhuController extends Controller
{
    //

    public function index()
    {

        $houses = House::all();

        if ($houses == null) {
            return redirect('no houses');
        } else {
            return compact('houses');
        }
    }
}
