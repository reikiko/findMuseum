<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class AdminCityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cities.index', [
            'cities' => City::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cities.create', [
            'city' => City::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:cities',
        ]);
        City::create($validated);
        return redirect('/dashboard/cities')->with('success', 'New Museum inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function show(city $city)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function edit(city $city)
    {
        return view('dashboard.cities.edit',[
            'city' => $city,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, city $city)
    {
        $rules = [
            'name' => 'required',
        ];

        
        if($request->slug != $city->slug){
            $rules['slug'] = 'required|unique:museums';
        }
        
        $validated = $request->validate($rules);

        City::where('id', $city->id)
                ->update($validated);

        return redirect('/dashboard/cities')->with('success', 'City name edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\city  $city
     * @return \Illuminate\Http\Response
     */
    public function destroy(city $city)
    {
        Museum::destroy($city->id);

        return redirect('/dashboard/cities')->with('deleted', ' City name deleted!');
    }
}
