<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\People;

class AdminPeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $people = People::all();
        
        return view ('admin.people.home', ['people' => $people]);

    }
}
