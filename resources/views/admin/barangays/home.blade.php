@extends('adminlte::page')

@section('title', 'Vehicles')

@section('content_header')
    <h1>Blog</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Vehicle List</h3>
                <div class="card-tools">
                    <a href="#" class="btn btn-primary form-control float-right">Add New Vehicle</a>
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
            <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Town ID</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($barangay as $barangay)
                            <tr>
                                <td>{{$barangay->id}}</td>
                                <td>{{$barangay->name}}</td>
                                <td>{{$barangay->town_id}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
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