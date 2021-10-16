<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\DiscountCouponController;
use App\Http\Controllers\PreOrderController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register',[EmployeeController::class,'register']);

Route::post('login',[EmployeeController::class,'login']);

Route::get('employee',[EmployeeController::class,'ListEmployee']);

Route::get('employee/{id}',[EmployeeController::class,'ListEmployeeByID']);

Route::get('status',[OrderStatusController::class,'ListOrderStatus']);

Route::get('status/{id}',[OrderStatusController::class,'ListOrderStatusByID']);

Route::post('newstatus',[OrderStatusController::class,'CreateStatus']);

Route::put('updatestatus',[OrderStatusController::class,'UpdateStatus']);

Route::get('product',[ProductStockController::class,'ListProduct']);

Route::get('product/{id}',[ProductStockController::class,'ListProductByID']);

Route::put('updateproduct',[ProductStockController::class,'UpdateProduct']);

Route::post('newproduct',[ProductStockController::class,'CreateProduct']);

Route::delete('deleteproduct/{id}',[ProductStockController::class,'DeleteProduct']);

Route::get('coupon',[DiscountCouponController::class,'ListCoupon']);

Route::get('coupon/{id}',[DiscountCouponController::class,'ListCouponByID']);

Route::post('newcoupon',[DiscountCouponController::class,'CreateCoupon']);

Route::delete('deletecoupon/{id}',[DiscountCouponController::class,'DeleteCoupon']);

Route::get('preorder',[PreOrderController::class,'ListPreOrder']);

Route::get('preorder/{id}',[PreOrderController::class,'ListPreOrderByID']);

Route::post('newpreorder',[PreOrderController::class,'CreatePreOrder']);