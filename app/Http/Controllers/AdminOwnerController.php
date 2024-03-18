<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;

class AdminOwnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $owners = Owner::all();
        
        return view ('admin.owners.home', ['owners' => $owners]);

    }
}
