<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OrderStatusController;
use App\Http\Controllers\ProductStockController;
use App\Http\Controllers\DiscountCouponController;
use App\Http\Controllers\PreOrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductInfoController;

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

Route::put('updateemployee',[EmployeeController::class,'UpdateEmployee']);

Route::delete('deleteemployee/{id}',[EmployeeController::class,'DeleteEmployee']);




Route::get('status',[OrderStatusController::class,'ListOrderStatus']);

Route::get('status/{id}',[OrderStatusController::class,'ListOrderStatusByID']);

Route::post('newstatus',[OrderStatusController::class,'CreateStatus']);

Route::put('updatestatus',[OrderStatusController::class,'UpdateStatus']);

Route::delete('deletestatus/{id}',[OrderStatusController::class,'DeleteStatus']);



Route::get('product',[ProductStockController::class,'ListProduct']);

Route::get('product/{id}',[ProductStockController::class,'ListProductByID']);

Route::put('updateproduct',[ProductStockController::class,'UpdateProduct']);

Route::post('newproduct',[ProductStockController::class,'CreateProduct']);

Route::delete('deleteproduct/{id}',[ProductStockController::class,'DeleteProduct']);



Route::get('coupon',[DiscountCouponController::class,'ListCoupon']);

Route::get('coupon/{id}',[DiscountCouponController::class,'ListCouponByID']);

Route::post('newcoupon',[DiscountCouponController::class,'CreateCoupon']);

Route::put('updatecoupon',[DiscountCouponController::class,'UpdateCoupon']);

Route::delete('deletecoupon/{id}',[DiscountCouponController::class,'DeleteCoupon']);



Route::get('preorder',[PreOrderController::class,'ListPreOrder']);

Route::get('preorder/{id}',[PreOrderController::class,'ListPreOrderByID']);

Route::post('newpreorder',[PreOrderController::class,'CreatePreOrder']);

Route::put('updatepreorder',[PreOrderController::class,'UpdatePreOrder']);

Route::delete('deletepreorder/{id}',[PreOrderController::class,'DeletePreOrder']);



Route::get('customer',[CustomerController::class,'ListCustomer']);

Route::get('customer/{id}',[CustomerController::class,'ListCustomerByID']);

Route::put('updatecustomer',[CustomerController::class,'UpdateCustomer']);

Route::post('newcustomer',[CustomerController::class,'registerCustomer']);

Route::delete('deletecustomer/{id}',[CustomerController::class,'DeleteCustomer']);



Route::get('payment',[PaymentController::class,'ListPayment']);

Route::get('payment/{id}',[PaymentController::class,'ListPaymentByID']);

Route::post('newpayment',[PaymentController::class,'CreatePayment']);

Route::put('updatepayment',[PaymentController::class,'UpdatePayment']);

Route::delete('deletepayment/{id}',[PaymentController::class,'DeletePayment']);



Route::get('info',[ProductInfoController::class,'ListProductInfo']);

Route::get('image/{id}',[ProductInfoController::class,'GetImageByID']);

Route::get('info/{id}',[ProductInfoController::class,'ListProductInfoByID']);

Route::post('newinfo',[ProductInfoController::class,'CreateInfo']);

Route::delete('deleteinfo/{id}',[ProductInfoController::class,'DeleteInfo']);