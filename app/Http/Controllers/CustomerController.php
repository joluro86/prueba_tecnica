<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all()->sortDesc();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        $cities = City::all();
        return view('customers.create', compact('cities'));
    }

    public function store(Request $request){

        $customer = New Customer();

        $customer->name = $request->name;
        $customer->id_number = $request->id_number;
        $customer->birth_day = $request->birth_day;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->cities_id = $request->input('city');
        $customer->save();

        return redirect()->route('customers.index');
    }

    public function show($id){
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id){
        $customer = Customer::find($id);
        $cities = City::all();
        return view('customers.edit',compact('customer', 'cities'));
    }

    public function update(Request $request, Customer $customer){
        $customer->name = $request->name;
        $customer->id_number = $request->id_number;
        $customer->birth_day = $request->birth_day;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->cities_id = $request->input('city');
        $customer->save();
        return redirect()->route('customers.index');
    }

    public function destroy(Customer $customer){
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
