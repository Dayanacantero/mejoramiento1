<?php

namespace App\Http\Controllers;

use App\Models\customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
   
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('customer.listar', compact('customers'));
    }

 
    public function create()
    {
        return view('customer.create');
    }


    public function store(Request $request)
    {
        $customer= new Customer();
        $customer->name=$request->name;
        $customer->adress=$request->adress;
        $customer->telephone=$request->telephone;
        $customer->num_social=$request->num_social;
        $customer->save();
        return $customer;
    }


    public function show(customer $customer)
    {
        return view('customer.show', compact('customer'));
    }


    public function edit(customer $customer)
    {
        return view('customer.edit',compact('customer'));
    }


    public function update(Request $request, customer $customer)
    {
        $customer->name = $request->name;
        $customer->adress = $request->adress;
        $customer->telephone = $request->telephone;
        $customer->num_social = $request->num_social;
        $customer->save();
        return redirect()->route('customer.index');
    }


    public function destroy(customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index');
    }
}
