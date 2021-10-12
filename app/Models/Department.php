<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    public $table = "Department";

    protected $fillable = [
        'DeptNo' ,
        'DeptName' 
    ];

    public function employee()
    {
        return $this->belongsTo('App\Model\Employee');
    }

    public function employeeRelation(){
        return $this->hasMany(Employee::class);
    }

}
