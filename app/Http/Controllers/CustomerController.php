<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    function ListCustomer(){ //GET
        return Customer::all();
    }

    function ListCustomerByID($id){ //GET BY ID
        $customer = DB::select(DB::raw("
        SELECT * FROM Customer WHERE Customer.CustomerID = ". $id ." "
        ));
        return $customer;
    }

    function UpdateCustomer(Request $request){ //PUT
        Customer::where('CustomerID', $request->CustomerID)->update(['Fname'=>$request->Fname,
        'Lname'=>$request->Lname,
        'Address'=>$request->Address,
        'PostalCode'=>$request->PostalCode,
        'Phone'=>$request->Phone,
        'Point'=>$request->Point,
        'serviceEmp'=>$request->serviceEmp
        ]);
        return "Update Completed!!!!";
    }

    function registerCustomer(Request $request){ //POST
        $customer = new Customer;
        // $customer->CustomerID = $request->input('CustomerID');
        $customer->Fname = $request->input('Fname');
        $customer->Lname = $request->input('Lname');
        $customer->Address = $request->input('Address');
        $customer->PostalCode = $request->input('PostalCode');
        $customer->Phone = $request->input('Phone');
        $customer->Point = $request->input('Point');
        $customer->serviceEmp = $request->input('serviceEmp');
        $customer->save();
        return $customer;
    }

    function DeleteCustomer($id){ //DELETE
        $customer = Customer::where('CustomerID', $id);
        $customer->delete();
        return "Delete Completed!!!";
    }
}
