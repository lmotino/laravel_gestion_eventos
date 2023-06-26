<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payments;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payment = payments::all();
        return $payment;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $payment = new payments();
        $payment->user_id = $request->user_id;
        $payment->reservation_id = $request->reservation_id;
        $payment->deposit = $request->deposit;
        $payment->pending_payment = $request->pending_payment;
        $payment->payment_date = $request->payment_date;
        $payment->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $payment = payments::findOrFail($id);
        return $payment;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $payment = payments::find($id);
        $payment->user_id = $request->user_id;
        $payment->reservation_id = $request->reservation_id;
        $payment->deposit = $request->deposit;
        $payment->pending_payment = $request->pending_payment;
        $payment->payment_date = $request->payment_date;
        $payment->save();
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $payment = payments::destroy($id);
        return $payment;
    }
}
