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
    public function create(){
        return view('admin.barangays.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'town_id' => 'required',           
        ]);

        Barangay::create($data);
        return redirect(route('admin.barangays.index'))->with('status', 'Barangay has been successfully saved.');
    }
    public function modify(Barangay $barangay){
        return view('admin.barangays.modify', ['barangay' => $barangay]);
    }
    public function update(Request $request, Barangay $barangay){
        //dd($request);
        $data = $request->validate([
            'name' => 'required',
            'town_id' => 'required',
        ]);

        $barangay->update($data);

        return redirect(route('admin.barangays.index', ['barangay' => $barangay]))->with('status', 'Barangay has been successfully updated');
    }
    public function delete(Barangay $barangay){

        return view('admin.barangays.delete', ['barangay' => $barangay]);

    }
    public function destroy(Barangay $barangay){
        $barangay->delete();
        return redirect(route('admin.barangays.index'))->with('status', 'Barangay has been successfully updated');
        

    }
    
}
