<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Info;
use Illuminate\Support\Facades\DB;

class ProductInfoController extends Controller
{
    //
    function ListProductInfo(){ //GET
        return Product_Info::all();
    }

    function ListProductInfoByID($id){ //GET BY ID
        $info = DB::select(DB::raw("
        SELECT * FROM Product_Info WHERE Product_Info.ProductID = ". $id ." "
        ));

        return $info;
    }

    function CreateInfo(Request $request){ //POST

        if($file = $request->file('ProductIMG')){
            $name = $file->getClientOriginalName();
            if($file->move('images', $name)){
                
                $info = new Product_Info;
                $info->ProductID = $request->input('ProductID');
                $info->ProdName = $request->input('ProdName');
                $info->CategoryNo = $request->input('CategoryNo');
                $info->ProductIMG = $name;
                $info->VendorNo = $request->input('VendorNo');
                $info->save();

                return "Store Complete!!!";
            };
        }
        return "Store Failed!!!";
    }

    function DeleteInfo($id){ //DELETE
        $info = Product_Info::where('ProductID', $id);
        $info->delete();
        return "Delete Completed!!!";
    }
}
