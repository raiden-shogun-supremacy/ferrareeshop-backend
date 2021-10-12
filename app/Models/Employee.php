<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    public $table = "Employee";

    protected $fillable = [
        'EmployeeID' ,
        'Fname' ,
        'Lname' ,
        'DeptNo' ,
        'Username' ,
        'Password' ,
        'IsHead'
    ];

    public $timestamps = false;

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function product_stock(){
        return $this->belongsTo(Product_Stock::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function product_stockRelation(){
        return $this->hasMany(Product_Stock::class);
    }

    public function departmentRelation()
    {
        return $this->hasOne('App\Model\Department');
    }

    public function customerRelation()
    {
        return $this->hasMany(Customer::class);
    }

}

