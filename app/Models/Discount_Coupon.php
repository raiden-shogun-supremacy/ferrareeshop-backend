<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount_Coupon extends Model
{
    use HasFactory;
    public $table = "Discount_Coupon";

    protected $fillable = [
        'DiscountID' ,
        'DiscountCode' ,
        'CodeAmount' ,
        'ValidUntil'
    ];

    public $timestamps = false;

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function paymentRelation(){
        return $this->hasMany(Payment::class);
    }
}
