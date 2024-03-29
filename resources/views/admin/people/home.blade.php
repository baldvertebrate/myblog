@extends('adminlte::page')

@section('title', 'People')

@section('content_header')
    <h1>People</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">People List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.people.create')}}" class="btn btn-primary form-control float-right">Add New Person</a>
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
                        <th style="width: 10px">Person ID</th>
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Contact Number</th>
                        <th>Category</th>
                        <th>Email</th>
                        <th>License Code</th>
                        <th>Barangay ID</th>
                        <th>Barangay Name</th>
                        <th>Actions<th>
                </thead>
                <tbody>
                       @foreach($people as $people)
                            <tr>
                                <td>{{$people->id}}</td>
                                <td>{{$people->first_name}}</td>
                                <td>{{$people->middle_name}}</td>
                                <td>{{$people->last_name}}</td>
                                <td>{{$people->sex}}</td>
                                <td>{{$people->contact_number}}</td>
                                <td>{{$people->category}}</td>
                                <td>{{$people->email}}</td>
                                <td>{{$people->license_code}}</td>
                                <td>{{$people->barangay_id}}</td>
                                <td>{{$people->barangay->name}}</td>

                                <td>
                                    <a href="{{route('admin.people.modify', $people)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.people.delete', $people)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
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