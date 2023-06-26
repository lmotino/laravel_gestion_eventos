<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $user = user::all();
        return $user;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $user = new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $user = user::findOrFail($id);
        return $user;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $user = user::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->phoneNumber = $request->phoneNumber;
        $user->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = user::destroy($id);
        return $user;
    }
}
