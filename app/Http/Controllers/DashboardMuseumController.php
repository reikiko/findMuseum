<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Museum;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardMuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.museums.index', [
            'museums' => Museum::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Museum $museum)
    {
        return view('dashboard.museums.create',[
            'museum' => $museum,
            'cities' => City::all(),
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
            'city_id' => 'required',
            'slug' => 'required|unique:museums',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ]);

        if($request->file('image')){
            $validated['image'] = $request->file('image')->store('museum-img');
        }

        $validated['excerpt'] = Str::limit(strip_tags($request->desc), 50);

        Museum::create($validated);

        return redirect('/dashboard/museums')->with('success', 'New Museum inserted!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show(Museum $museum)
    {
        // return $museum;
        return view('dashboard.museums.show', [
            'museum' => $museum
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        return view('dashboard.museums.edit',[
            'museum' => $museum,
            'cities' => City::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        $rules = [
            'name' => 'required',
            'city_id' => 'required',
            'image' => 'image|file|max:1024',
            'desc' => 'required'
        ];

        
        if($request->slug != $museum->slug){
            $rules['slug'] = 'required|unique:museums';
        }
        
        $validated = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validated['image'] = $request->file('image')->store('museum-img');
        }
        $validated['excerpt'] = Str::limit(strip_tags($request->desc), 50);

        Museum::where('id', $museum->id)
                ->update($validated);

        return redirect('/dashboard/museums')->with('success', 'Museum data edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        if($museum->image){
            Storage::delete($museum->image);
        }
        
        Museum::destroy($museum->id);

        return redirect('/dashboard/museums')->with('deleted', ' Museum data deleted!');
    }
}