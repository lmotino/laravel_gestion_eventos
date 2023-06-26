<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reservations;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        //$reservations = reservations::all();
        //return $reservations;

        $reservations = DB::table('events')
            ->join('reservations', 'events.id', '=', 'reservations.event_id')
            ->join('payments', 'reservations.id', '=', 'payments.reservation_id')
            ->select('events.title', 'reservations.name', 'reservations.reservation_date', 'payments.deposit','payments.pending_payment')
            ->get();
        return $reservations;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $reservations = new reservations();
        $reservations->DNI = $request->DNI;
        $reservations->name = $request->name;
        $reservations->email = $request->email;
        $reservations->phone = $request->phone;
        $reservations->reservation_date = $request->reservation_date;
        $reservations->user_id = $request->user_id;
        $reservations->event_id = $request->event_id; 
        $reservations->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $reservations = reservations::findOrFail($id);
        return $reservations;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $reservations = reservations::find($id);
        $reservations->DNI = $request->DNI;
        $reservations->name = $request->name;
        $reservations->email = $request->email;
        $reservations->phone = $request->phone;
        $reservations->reservation_date = $request->reservation_date;
        $reservations->user_id = $request->user_id;
        $reservations->event_id = $request->event_id; 
        $reservations->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $reservations = reservations::destroy($id);
        return $reservations;
    }
}
