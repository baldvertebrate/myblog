@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Blog</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">User List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary form-control float-right">Add New User</a>
                </div>
        </div>
        <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
            <div class= "table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 10px">ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user -> id}}</td>
                                <td>{{$user -> name}}</td>
                                <td>{{$user -> email}}</td>
                                <td>{{$user->role->getLevel()}}</td>
                                <td>{{$user->role->getStatus()}}</td>
                                <td>
                                    <a href="{{route('admin.users.reset', $user)}}" class="btn btn-primary" title="Reset Password"><i class="fas fa-key"></i></a>&nbsp;
                                    <a href="{{route('admin.users.modify', $user)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.users.delete', $user)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                            </tr>
                        @endforeach
                    <tr> 
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop