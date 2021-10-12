<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $table = "Customer";

    protected $fillable = [
        'CustomerID' ,
        'Fname' ,
        'Lname' ,
        'Address' ,
        'PostalCode' ,
        'Phone' ,
        'Point' ,
        'serviceEmp' 
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

    public function payment(){
        return $this->belongsTo(Payment::class);
    }

    public function preorder_payment(){
        return $this->belongsTo(Preoder_Payment::class);
    }

    public function employeeRelation(){
        return $this->hasOne('App\Model\Employee');
    }

    public function preorder_paymentRelation(){
        return $this->hasMany(Preorder_Payment::class);
    }

    public function paymentRelation(){
        return $this->hasMany(Payment::class);
    }
}
