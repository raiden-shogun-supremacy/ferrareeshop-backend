<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;
    public $table = "Vendor";

    protected $fillable = [
        'VendorNo' ,
        'VenderName'
    ];

    public function product_info(){
        return $this->belongsTo(Product_Info::class);
    }

    public function product_infoRelation(){
        return $this->hasMany(Product_Info::class);
    }
}
