<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = categories::all();
        return $categories;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categorie = new categories();
        $categorie->name = $request->name;
        $categorie->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $categorie = categories::findOrFail($id);
        return $categorie;

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $categorie = categories::findOrFail($id);
        $categorie = new categories();
        $categorie->name = $request->name;
        $categorie->save();
        return $categorie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $categorie = categories::destroy($id);
        return $categorie;
    }
}
