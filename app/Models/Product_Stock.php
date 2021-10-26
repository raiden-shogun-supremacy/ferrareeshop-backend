<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Stock extends Model
{
    use HasFactory;
    public $table = "Product_Stock";

    protected $fillable = [
        'ProductID' ,
        'ProductName' ,
        'Category' ,
        'LotNo' ,
        'UnitPrice' ,
        'InStockAmt',
        'RecordDate'
    ];

    public $timestamps = false;

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function product_info(){
        return $this->belongsTo(Product_Info::class);
    }

    public function product_infoRelation(){
        return $this->hasOne(Product_Info::class);
    }

    public function employeeRelation(){
        return $this->hasMany(Employee::class);
    }

    public function paymentRelation(){
        return $this->hasMany(Payment::class);
    }
}
