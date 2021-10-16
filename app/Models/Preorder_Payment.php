<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preorder_Payment extends Model
{
    use HasFactory;
    public $table = "Preorder_Payment";

    protected $fillable = [
        'ProductID' ,
        'CustomerID' ,
        'PreOrderAmt' ,
        'PrePrice' 
    ];

    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function product_info(){
        return $this->belongsTo(Product_Info::class);
    }

    public function customerRelation(){
        return $this->hasOne('App\Model\Customer');
    }

    public function product_infoRelation(){
        return $tihs->hasMany(Product_Info::class);
    }
}

