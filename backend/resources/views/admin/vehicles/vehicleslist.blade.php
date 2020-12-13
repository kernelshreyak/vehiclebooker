
@extends('layouts.admin')
@section('title', 'Dashboard - Vehicle Booker')

@section('dashboard')

 <div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Vehicle Booker Dashboard > Vehicles</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Manage Vehicles</li>
            </ol>
            <div class="row">
                <button class="btn btn-success">Add Vehicle</button>
            </div>
            <br>
            <div class="row">
                <table class="table table-bordered">
                    <thead>
                         <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>VNUM</th>
                            <th>Year</th>
                            <th>Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach($vehicles as $vehicle)
                                <td>{{$vehicle->id}}</td>
                                <td>{{$vehicle->name}}</td>
                                <td>{{$vehicle->vnum}}</td>
                                <td>{{$vehicle->year}}</td>
                                <td>{{$vehicle->active}}</td>
                                <td>
                                    <button class="btn btn-warning">Edit</button>
                                    <button class="btn btn-danger">Delete</button>
                                </td>
                            @endforeach
                        </tr>
                    </tbody>    
                </table>
            </div>
        </div>
    </main>
</div>
@stop
            