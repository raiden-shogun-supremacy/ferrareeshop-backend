<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Preorder_Payment;

class PreOrderController extends Controller
{
    //
    function ListPreOrder(){ //GET
        return Preorder_Payment::all();
    }

    function ListPreOrderByID($id){ //GET BY ID
        $preorder = DB::select(DB::raw("
        SELECT * FROM Preorder_Payment WHERE Preorder_Payment.ProductID = ". $id ." "
        ));

        return $preorder;
    }

    function CreatePreOrder(Request $request){ //POST
        $preorder = new Preorder_Payment;
        $preorder->ProductID = $request->input('ProductID');
        $preorder->CustomerID = $request->input('CustomerID');
        $preorder->PreOrderAmt = $request->input('PreOrderAmt');
        $preorder->PrePrice = $request->input('PrePrice');
        $preorder->save();
        return $preorder;
    }
}
