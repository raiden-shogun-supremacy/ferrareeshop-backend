<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_Status extends Model
{
    use HasFactory;
    public $table = "Order_Status";

    protected $fillable = [
        'ReceiptID' ,
        'Status' 
    ];

    public $timestamps = false;

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function paymentRelation(){
        return $this->hasMany(Payment::class);
    }
}
