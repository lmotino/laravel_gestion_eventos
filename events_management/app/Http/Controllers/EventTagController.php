<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\event_tags;

class EventTagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventTag = event_tags::all();
        return $eventTag;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $eventTag = new event_tags();
        $eventTag->name = $request->name;
        $eventTag->email = $request->email;
        $eventTag->password = $request->password;
        $eventTag->phoneNumber = $request->phoneNumber;
        $eventTag->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eventTag = event_tags::findOrFail($id);
        return $eventTag;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $eventTag = event_tags::find($id);
        $eventTag->name = $request->name;
        $eventTag->email = $request->email;
        $eventTag->password = $request->password;
        $eventTag->phoneNumber = $request->phoneNumber;
        $eventTag->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eventTag = event_tags::destroy($id);
        return $eventTag;
    }
}
