@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content_header')
    <h1>Owners</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Owners List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.owners.create')}}" class="btn btn-primary form-control float-right">Add New Owner</a>
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
                        <th style="width: 10px">Owner ID</th>
                        <th>Person ID</th>
                        <th>Owner's First Name</th>
                        <th>Owner's Last Name</th>
                        <th>Vehicle ID</th>
                        <th>Vehicle Model</th>
                        <th>Vehicle Type</th>
                        <th>Vehicle's Plate Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($owners as $owner)
                            <tr>
                                <td>{{$owner->id}}</td>
                                <td>{{$owner->people_id}}</td>
                                <td>{{$owner->people->first_name}}</td>
                                <td>{{$owner->people->last_name}}</td>
                                <td>{{$owner->vehicle_id}}</td>
                                <td>{{$owner->vehicle->model}}</td>
                                <td>{{$owner->vehicle->type}}</td>
                                <td>{{$owner->vehicle->plate_number}}</td>
                                <td>
                                    <a href="{{route('admin.owners.modify', $owner)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.owners.delete', $owner)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
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