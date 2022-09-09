<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = City::all()->sortDesc();
        return view('cities.index', compact('cities'));
    }

    public function create(){
        return view('cities.create');
    }

    public function store(Request $request){
        $city = New City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function show($id){
        $city = City::find($id);
        return view('cities.show',compact('city'));
    }

    public function edit($id){
        $city = City::find($id);
        return view('cities.edit',compact('city'));
    }

    public function update(Request $request, City $city){
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function destroy(City $city){
        $city->delete();
        return redirect()->route('cities.index');
    }
}
