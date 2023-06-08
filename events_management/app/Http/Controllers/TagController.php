<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tags;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tags = tags::all();
        return $tags;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tag = new tags();
        $tag->name = $request->name;
        $tag->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tag = tags::findOrFail($id);
        return $tag;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tag = tags::findOrFail($id);
        $tag = new tags();
        $tag->name = $request->name;
        $tag->save();
        return $tag;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $tag = tags::destroy($id);
        return $tag;
    }

}