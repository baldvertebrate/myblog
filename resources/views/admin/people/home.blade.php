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
                    <a href="#" class="btn btn-primary form-control float-right">Add New Person</a>
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
                        <th>First Name</th>
                        <th>Middle Name</th>
                        <th>Last Name</th>
                        <th>Sex</th>
                        <th>Barangay ID</th>
                        <th>Owner ID</th>
                        <th>Actions</th>
                        <th>Contact Number</th>
                        <th>Category</th>
                        <th>Email</th>
                        <th>License Code</th>
                        <th>Actions<th>
                    </tr>
                </thead>
                <tbody>
                       
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="#" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                            </tr>
                        
                    <tr> 
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