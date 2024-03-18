@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content_header')
    <h1>Vehicle</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Vehicle List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.vehicles.create')}}" class="btn btn-primary form-control float-right">Add New Vehicle</a>
                </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Owner ID</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Color</th>
                        <th>Type</th>
                        <th>PlateNumber</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vehicles as $vehicle)
                            <tr>
                                <td>{{$vehicle->id}}</td>
                                <td>{{$vehicle->owner_number}}</td>
                                <td>{{$vehicle->make}}</td>
                                <td>{{$vehicle->model}}</td>
                                <td>{{$vehicle->color}}</td>
                                <td>{{$vehicle->type}}</td>
                                <td>{{$vehicle->plate_number}}</td>
                                <td>
                                    <a href="{{route('admin.vehicles.modify', $vehicle)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.vehicles.delete', $vehicle)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                            </tr> 
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop