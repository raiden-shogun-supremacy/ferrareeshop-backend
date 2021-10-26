<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product_Stock;

class ProductStockController extends Controller
{
    //
    function ListProduct(){ //GET
        return Product_Stock::all();
    }

    function ListProductByID($id){ //GET BY ID
        $product = DB::select(DB::raw("
        SELECT * FROM Product_Stock WHERE Product_Stock.ProductID = ". $id ." "
        ));

        return $product;
    }

    function UpdateProduct(Request $request){ //PUT
        Product_Stock::where('ProductID', $request->ProductID)->update(['ProductName'=>$request->ProductName,
        'Category'=>$request->Category,
        'LotNo'=>$request->LotNo,
        'UnitPrice'=>$request->UnitPrice,
        'InStockAmt'=>$request->InStockAmt
        ]);
        return "Update Completed!!!!";
    }

    function CreateProduct(Request $request){ //POST
        $product = new Product_Stock;
        // $product->ProductID = $request->input('ProductID');
        $product->ProductName = $request->input('ProductName');
        $product->Category = $request->input('Category');
        $product->LotNo = $request->input('LotNo');
        $product->UnitPrice = $request->input('UnitPrice');
        $product->InStockAmt = $request->input('InStockAmt') ;
        $product->save();
        return $product;
    }

    function DeleteProduct($id){ //DELETE
        $product = Product_Stock::where('ProductID', $id);
        $product->delete();
        return "Delete Completed!!!";
    }
}
