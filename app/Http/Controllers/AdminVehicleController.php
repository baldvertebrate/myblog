<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class AdminVehicleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    public function index(){
        $vehicles = Vehicle::all();
        
        return view ('admin.vehicles.home', ['vehicles' => $vehicles]);

    }
    public function create(){
        return view('admin.vehicles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
        ]);
        Vehicle::create($data);
        return redirect(route('admin.vehicles.index'))->with('status', 'Vehicle has been successfully saved.');
    }
    public function modify(Vehicle $vehicle){
        return view('admin.vehicles.modify', ['vehicle' => $vehicle]);
    }
    public function update(Request $request, Vehicle $vehicle){
        //dd($request);
        $data = $request->validate([
            'make' => 'required',
            'model' => 'required',
            'year' => 'required',
            'color' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
        ]);

        $vehicle->update($data);

        return redirect(route('admin.vehicles.index', ['vehicle' => $vehicle]))->with('status', 'Vehicle has been successfully updated');
    }
    public function delete(Vehicle $vehicle){

        return view('admin.vehicles.delete', ['vehicle' => $vehicle]);

    }
    public function destroy(Vehicle $vehicle){
        $vehicle->delete();
        return redirect(route('admin.vehicles.index'))->with('status', 'Vehicle has been successfully updated');
        
    }
}
