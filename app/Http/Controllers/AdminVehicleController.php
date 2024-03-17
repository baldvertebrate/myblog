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
}
