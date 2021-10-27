<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Info extends Model
{
    use HasFactory;
    public $table = "Product_Info";

    protected $fillable = [
        'ProductID' ,
        'ProdName' ,
        'CaregoryNo' ,
        'VenderNo' 
    ];

    public $timestamps = false;

    public function product_payment(){
        return $this->belongsTo(Product_Payment::class);
    }

    public function product_stock(){
        return $this->belongsTo(Product_Stock::class);
    }

    public function vendor(){
        return $this->belonsTo(Vendor::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function product_stockRelation(){
        return $this->hasMany(Product_Stock::class);
    }

    public function vendorRelation(){
        return $this->hasOne('App\Model\Vendor');
    }

    public function categoryRelation(){
        return $this->hasOne('App\Model\Category');
    }

    public function preorder_paymentRelation(){
        return $this->hasMany(Preorder_Payment::class);
    }
}
