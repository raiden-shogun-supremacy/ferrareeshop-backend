<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Discount_Coupon;

class DiscountCouponController extends Controller
{
    //
    function ListCoupon(){ //GET
        return Discount_Coupon::all();
    }

    function ListCouponByID($id){ //GET BY ID
        $coupon = DB::select(DB::raw("
        SELECT * FROM Discount_Coupon WHERE Discount_Coupon.DiscountID = ". $id ." "
        ));

        return $coupon;
    }

    function UpdateCoupon(Request $request){ //PUT
        Discount_Coupon::where('DiscountID', $request->DiscountID)->update(['DiscountCode'=>$request->DiscountCode,
        'CodeAmount'=>$request->CodeAmount,
        'ValidUntil'=>$request->ValidUntil
        ]);
        return "Update Completed!!!!";
    }

    function CreateCoupon(Request $request){ //POST
        $coupon = new Discount_Coupon;
        $coupon->DiscountCode = $request->input('DiscountCode');
        $coupon->CodeAmount = $request->input('CodeAmount');
        $coupon->ValidUntil = $request->input('ValidUntil');
        $coupon->save();
        return $coupon;
    }

    function DeleteCoupon($id){ //DELETE
        $coupon = Discount_Coupon::where('DiscountID', $id);
        $coupon->delete();
        return "Delete Completed!!!";
    }
}
