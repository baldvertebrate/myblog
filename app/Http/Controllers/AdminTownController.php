<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Town;

class AdminTownController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $town = Town::all();
        
        return view ('admin.towns.home', ['towns' => $town]);

    }
}
