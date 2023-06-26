<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\events;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $events = events::all();
        return $events;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $events = new events();
        $events->title = $request->title;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->location_id = $request->location_id;
        $events->category_id = $request->category_id;
        $events->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $events = events::findOrFail($id);
        return $events;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $events = events::find($id);
        $events->title = $request->title;
        $events->description = $request->description;
        $events->date = $request->date;
        $events->location_id = $request->location_id;
        $events->category_id = $request->category_id;
        $events->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $events = events::destroy($id);
        return $events;
    }
}
