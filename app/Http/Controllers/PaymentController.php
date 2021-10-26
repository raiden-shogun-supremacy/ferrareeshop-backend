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

    function UpdatePayment(Request $request){ //PUT
        Payment::where('ReceiptID', $request->ReceiptID)->update(['ProductID'=>$request->ProductID,
        'ProductName'=>$request->ProductName,
        'CustomerID'=>$request->CustomerID,
        'CustomerName'=>$request->CustomerName,
        'TotalAmt'=>$request->TotalAmt,
        'TotalPrice'=>$request->TotalPrice,
        'CurrentOrderPoint'=>$request->CurrentOrderPoint,
        'ReceiptDate'=>$request->ReceiptDate,
        ]);
        return "Update Completed!!!!";
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

    function DeletePayment($id){ //DELETE
        $payment = Payment::where('ReceiptID', $id);
        $payment->delete();
        return "Delete Completed!!!";
    }
}
