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

    function UpdatePreOrder(Request $request){ //PUT
        Preorder_Payment::where('ProductID', $request->ProductID)->update(['CustomerID'=>$request->CustomerID,
        'PreOrderAmt'=>$request->PreOrderAmt,
        'PrePrice'=>$request->PrePrice
        ]);
        return "Update Completed!!!!";
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

    function DeletePreOrder($id){ //DELETE
        $preorder = Preorder_Payment::where('ProductID', $id);
        $preorder->delete();
        return "Delete Completed!!!";
    }
}
