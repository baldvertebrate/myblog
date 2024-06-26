@extends('adminlte::page')

@section('title', 'Towns')

@section('content_header')
    <h1>Town</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Town List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.towns.create')}}" class="btn btn-primary form-control float-right">Add New Town</a>
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
                        <th>Zipcode</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($towns as $town)
                 
                    <tr>
                        <td>{{$town->id}}</td>
                        <td>{{$town->name}}</td>
                        <td>{{$town->zipcode}}</td>
                        <td>
                                    <a href="{{route('admin.towns.modify', $town)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.towns.delete', $town)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;
                                </td>
                    </tr> 

                  @endforeach
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