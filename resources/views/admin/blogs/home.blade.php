@extends('adminlte::page')

@section('title', 'Russell\'s Blog')

@section('content_header')
    <h1>Blog</h1>
@stop

@section('content')
        <div class="card">
        <div class="card-header">
                <h3 class="card-title">Blog List</h3>
                <div class="card-tools">
                    <a href="{{route('admin.blogs.create')}}" class="btn btn-primary form-control float-right">Create New Blog</a>
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
                        <th>Title</th>
                        <th>Content</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @foreach($blogs as $blog)
                            <tr>
                                <td>{{$blog -> id}}</td>
                                <td>{{$blog -> title}}</td>
                                <td>{{substr($blog -> content, 0 ,100)}}</td>
                                <td>
                                    <a href="{{route('admin.blogs.modify', $blog)}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>&nbsp;
                                    <a href="{{route('admin.blogs.delete', $blog)}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>&nbsp;

                                </td>
                            </tr>
                        @endforeach
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