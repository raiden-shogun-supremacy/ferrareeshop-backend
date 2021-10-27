<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_Info;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

    function GetImageByID($id){ //GET
        $info = DB::select(DB::raw("
        SELECT ProductIMG FROM Product_Info WHERE Product_Info.ProductID = ". $id ." "
        ));
        
        return $info;
    }

    function CreateInfo(Request $request){ //POST

        // if($file = $request->file('ProductIMG')){
        //     $name = $file->getClientOriginalName();
        //     if($file->move('images', $name)){
        //         $info = new Product_Info;
        //         $info->ProductID = $request->input('ProductID');
        //         $info->ProdName = $request->input('ProdName');
        //         $info->CategoryNo = $request->input('CategoryNo');
        //         $info->ProductIMG = $name;
        //         $info->VendorNo = $request->input('VendorNo');
        //         $info->save();

        //         return "Store Complete!!!";
        //     };
        // }
        // return "Store Failed!!!";

        $info = new Product_Info;
        $info->ProductID = $request->input('ProductID');
        $info->ProdName = $request->input('ProdName');
        $info->CategoryNo = $request->input('CategoryNo');
        $info->ProductIMG = $request->input('ProductIMG');
        $info->VendorNo = $request->input('VendorNo');
        $info->save();  
        return $info; 

    }

    function UpdateInfo(Request $request){ //PUT
        Product_Info::where('ProductID', $request->ProductID)->update(['ProdName'=>$request->ProductName,
        'CategoryNo'=>$request->CategoryNo,
        'ProductIMG'=>$request->ProductIMG,
        'VendorNo'=>$request->VendorNo
        ]);
        return "Update Completed!!!!";
    }

    function DeleteInfo($id){ //DELETE
        $info = Product_Info::where('ProductID', $id);
        $info->delete();  
        return "Delete Completed!!!";
    }
}
