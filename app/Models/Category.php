<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "Category";

    protected $fillable = [
        'CategoryNo' ,
        'CategoryName' 
    ];

    public function product_info(){
        return $this->belongsTo(Product_Info::class);
    }

    public function product_infoRelation(){
        return $this->hasMany(Product_Info::class);
    }
}
