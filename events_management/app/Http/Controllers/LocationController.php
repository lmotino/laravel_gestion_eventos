<?php

namespace App\Http\Controllers;

use App\Models\locations;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $locations = locations::all();
        return $locations;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $location = new locations();
        $location->name = $request->name;
        $location->address = $request->address;
        $location->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $location = locations::findOrFail($id);
        return $location;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $location = locations::find($id);
        $location->name = $request->name;
        $location->address = $request->address;
        $location->save();
        return $location;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $location = locations::destroy($id);
        return $location;
    }
}
