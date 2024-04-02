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
    public function create(){
        return view('admin.people.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'sex' => 'required',
            'contact_number' => 'required',
            'category' => 'required',
            'specifics' => 'required',
            'email' => 'required',
            'license_code' => 'required',
            'barangay_id' => 'required', 
            'Town' => 'required', 
        ]);
        People::create($data);
        return redirect(route('admin.people.index'))->with('status', 'Person has been successfully saved.');
    }
    public function modify(People $people){
        return view('admin.people.modify', ['people' => $people]);
    }
    public function update(Request $request, People $people){
        //dd($request);
        $data = $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'sex' => 'required',
            'contact_number' => 'required',
            'category' => 'required',
            'specifics' => 'required',
            'email' => 'required',
            'license_code' => 'required',
            'barangay_id' => 'required', 
            'Town' => 'required',  

        ]);

        $people->update($data);

        return redirect(route('admin.people.index', ['people' => $people]))->with('status', 'People has been successfully updated');
    }
    public function delete(People $people){

        return view('admin.people.delete', ['people' => $people]);

    }
    public function destroy(People $people){
        $people->delete();
        return redirect(route('admin.people.index'))->with('status', 'Person has been successfully updated');
        
    }
}
