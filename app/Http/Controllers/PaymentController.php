<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index() 
    {
        return view('payment');
    }

    public function create(Request $request)
    {
        $payment = new Payment;
        $payment->product_name = $request->product_name;
        $payment->name = $request->name;
        $payment->email = $request->email;
        $payment->contact = $request->contact;
        $payment->amount = $request->amount;
        $payment->product_schedule = $request->product_schedule;
        $payment->ticket_number = mt_rand(10000, 99999999);
        $payment->reference_number = uniqid();
        $payment->save();
        
        return redirect('confirmation/'.$payment->id);
    }

    public function find($id)
    {
        $payment = Payment::findOrFail($id);

        return view('confirmation', compact('payment'));
    }
}
