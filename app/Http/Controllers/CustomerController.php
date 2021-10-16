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

    function registerCustomer(Request $request){ //POST
        $customer = new Customer;
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
}
