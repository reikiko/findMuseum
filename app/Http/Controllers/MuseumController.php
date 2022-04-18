<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMuseumRequest;
use App\Http\Requests\UpdateMuseumRequest;
use App\Models\Museum;

class MuseumController extends Controller
{
    public function index()
    {
        $museums = Museum::with(['city']);
        if(request('search')){
            $museums->where('name','like', '%' . request('search') . '%');
        }
        return view('page.museums', [
            "index" => "Museums",
            "museums" => $museums->get(),
        ]);
    }

    public function show(Museum $museum)
    {
        return view('page.singlemuseum', [
            "index" => "Museums",
            "museum" => $museum,
        ]);
    }
}
