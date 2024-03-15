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

    public function create(){
        return view('admin.vehicles.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'make' => 'required',
            'model' => 'required',
            'color' => 'required',
            'type' => 'required',
            'plate_number' => 'required',
            'owner_id' => 'required'
        ]);

        Vehicle::create($data);

        return redirect(route('admin.vehicles.index'))->with('status', 'Vehicle has been successfully saved.');
    }
}
