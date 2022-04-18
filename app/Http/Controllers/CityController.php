<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index(){
        return view('page.cities', [
            "index" => "Cities",
            "cities" => City::all(),
        ]);
    }

    public function show(City $city){
        return view('page.city', [
            "index" => $city->name,
            "museums" => $city->museums,
        ]);
    }
}
