<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order_Status;

class OrderStatusController extends Controller
{
    //
    function ListOrderStatus(){ //GET
        return Order_Status::all();
    }

    function ListOrderStatusByID($id){ //GET BY ID
        $status = DB::select(DB::raw("
        SELECT * FROM Order_Status WHERE Order_Status.ReceiptID = ". $id ." "
        ));

        return $status;
    }

    function UpdateStatus(Request $request){ //PUT
        Order_Status::where('ReceiptID', $request->ReceiptID)->update(['Status'=>$request->Status]);
        return "Update Completed!!!!";

    }

    function CreateStatus(Request $request){ //POST
        $OrderStatus = new Order_Status;
        $OrderStatus->ReceiptID = $request->input('ReceiptID');
        $OrderStatus->Status = $request->input('Status');
        $OrderStatus->save();
        return $OrderStatus;
    }
}
