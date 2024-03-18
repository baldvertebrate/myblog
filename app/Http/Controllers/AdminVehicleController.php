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
            'owner_number' => 'required',
            'make' => 'required',
            'model' => 'required',
            'color' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
        ]);
        Vehicle::create($data);
        return redirect(route('admin.vehicles.index'))->with('status', 'Vehicle has been successfully saved.');
    }
}
