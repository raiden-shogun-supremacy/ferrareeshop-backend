<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    //
    function register(Request $request){ //POST
        $employee = new employee;
        $employee->Fname = $request->input('Fname');
        $employee->Lname = $request->input('Lname');
        $employee->DeptNo = $request->input('DeptNo');
        $employee->Username = $request->input('Username');
        $employee->Password = Hash::make($request->input('Password'));
        $employee->IsHead = $request->input('IsHead');
        $employee->save();
        return $employee;
    }

    function login(Request $request){
        $employee = Employee::where('Username',$request->Username)->first();
        if(!$employee || !Hash::check($request->Password,$employee->Password))
        {
            return ["error"=>"Username or password is not matched"];
        }
        return $employee;
    }

    function ListEmployee(){ //GET
        return Employee::all();
    }

    function ListEmployeeByID($id){ //GET BY ID
        $employee = DB::select(DB::raw("
        SELECT * FROM employee WHERE employee.EmployeeID = ". $id ." "
        ));

        return $employee;
    }
}
