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
    public function create(){
        return view('admin.owners.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'people_id' => 'required',
            'vehicle_id' => 'required',           
        ]);

        Owner::create($data);
        return redirect(route('admin.owners.index'))->with('status', 'Owner has been successfully saved.');
    }
    public function modify(Owner $owner){
        return view('admin.owners.modify', ['owner' => $owner]);
    }
    public function update(Request $request, Owner $owner){
        //dd($request);
        $data = $request->validate([
            'people_id' => 'required',
            'vehicle_id' => 'required',
        ]);
        $owner->update($data);

        return redirect(route('admin.owners.index', ['owner' => $owner]))->with('status', 'Owner has been successfully updated');
    }
    public function delete(Owner $owner){

        return view('admin.owners.delete', ['owner' => $owner]);

    }
    public function destroy(Owner $owner){
        $owner->delete();
        return redirect(route('admin.owners.index'))->with('status', 'Owner has been successfully updated');
        

    }
}
