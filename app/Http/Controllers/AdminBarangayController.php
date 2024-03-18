<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barangay;

class AdminBarangayController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $barangay = Barangay::all();
        
        return view ('admin.barangays.home', ['barangay' => $barangay]);

    }
}
