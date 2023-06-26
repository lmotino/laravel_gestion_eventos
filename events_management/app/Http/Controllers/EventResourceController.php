<?php

namespace App\Http\Controllers;

use App\Models\event_resources;
use Illuminate\Http\Request;

class EventResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventresource = event_resources::all();
        return $eventresource;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $eventresource = new event_resources();
        $eventresource->resource_id = $request->resource_id;
        $eventresource->event_id = $request->event_id;
        $eventresource->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eventresource = event_resources::findOrFail($id);
        return $eventresource;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $eventresource = event_resources::find($id);
        $eventresource->resource_id = $request->resource_id;
        $eventresource->event_id = $request->event_id;
        $eventresource->save();
        return $eventresource;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eventresource = event_resources::destroy($id);
        return $eventresource;
    }
}
