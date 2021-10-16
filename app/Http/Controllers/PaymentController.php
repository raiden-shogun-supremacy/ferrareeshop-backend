<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    //
    function ListPayment(){ //GET
        return Payment::all();
    }

    function ListPaymentByID($id){ //GET BY ID
        $payment = DB::select(DB::raw("
        SELECT * FROM Payment WHERE Payment.ReceiptID = ". $id ." "
        ));
        return $payment;
    }

    function CreatePayment(Request $request){ //POST
        $payment = new Payment;
        $payment->ProductID = $request->input('ProductID');
        $payment->ProductName = $request->input('ProductName');
        $payment->CustomerID = $request->input('CustomerID');
        $payment->CustomerName = $request->input('CustomerName');
        $payment->TotalAmt = $request->input('TotalAmt');
        $payment->TotalPrice = $request->input('TotalPrice');
        $payment->CurrentOrderPoint = $request->input('CurrentOrderPoint');
        $payment->save();
        return $payment;
    }
}
