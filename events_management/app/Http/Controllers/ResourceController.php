<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\resources;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //select *
        $resources = resources::all();
        return $resources;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //insert into
        $resource = new resources();
        $resource->name = $request->name;
        $resource->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //select * from resource where id = $id
        $resource = resources::findOrFail($id);
        return $resource;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //update por id
        $resource = resources::findOrFail($id);
        $resource->name = $request->name;
        $resource->save();
        return $resource;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //dele for id
        $resource = resources::destroy($id);
        return $resource;
    }
}
