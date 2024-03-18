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
    public function create(){
        return view('admin.towns.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'zipcode' => 'required',           
        ]);

        Town::create($data);
        return redirect(route('admin.towns.index'))->with('status', 'Town has been successfully saved.');
    }
    public function modify(Town $town){
        return view('admin.towns.modify', ['town' => $town]);
    }
    public function update(Request $request, Town $town){
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'zipcode' => 'required',
        ]);

        $town->update($data);

        return redirect(route('admin.towns.index', ['town' => $town]))->with('status', 'Town has been successfully updated');
    }
    public function delete(Town $town){

        return view('admin.towns.delete', ['town' => $town]);

    }
    public function destroy(Town $town){
        $town->delete();
        return redirect(route('admin.towns.index'))->with('status', 'Town has been successfully updated');
        
    }
}
