<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    public $table = "Payment";

    protected $fillable = [
        'ReceiptID' ,
        'ProductID' ,
        'ProductName' ,
        'CustomerID' ,
        'CustomerName' ,
        'TotalAmt' ,
        'TotalPrice' ,
        'CurrentOrderPoint' ,
        'ReceiptDate' 
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function order_status(){
        return $this->belongsTo(Order_Status::class);
    }

    public function discount_coupon(){
        return $this->belongsTo(Discount_coupon::class);
    }

    public function product_stock(){
        return $this->belongsTo(Product_Stock::class);
    }

    public function customerRelation(){
        return $this->hasOne('App\Model\Customer');
    }

    public function order_statusRelation(){
        return $this->hasOne('App\Model\Order_Status');
    }

    public function discount_couponRelation(){
        return $this->hasMany(Discount_Coupon::class);
    }

    public function product_stockRelation(){
        return $this->hasMany(Product_Stock::class);
    }
}
