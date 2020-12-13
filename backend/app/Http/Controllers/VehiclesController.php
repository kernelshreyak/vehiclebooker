<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehicle;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        return view('admin//vehicles/vehicleslist',['vehicles' => $vehicles]);
    }

    
    public function add()
    {
        echo "create vehicle";
    }

    public function edit($id)
    {
        echo "create vehicle";
    }

    
    public function save(Request $request)
    {
        
    }

    public function update(Request $request)
    {
        
    }

   
    public function show($id)
    {
        
    }

   
    public function delete($id)
    {
       echo "Deleting vehicle ID:". $id;
    }



    public function track()
    {
        return view('admin/vehicles/vehiclestrack');
    }
}
