@extends('adminlte::page')

@section('title', 'Blogs - > Modify blog')

@section('content_header')
    <h1>Blogs - > Modify Blog</h1>
@stop

@section('content')
    <div class="card">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
        <form method="post" action="{{route('admin.barangays.update', $barangay)}}">
            @csrf
            @method('put')
                <div class="card-body">
                <div class="form-group">
                        <label for="owner id">Barangay Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$barangay->name}}" placeholder="Enter Barangay Name">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Town ID</label>
                        <input type="text" name="town_id" class="form-control @error('town_id') is-invalid @enderror" id="town_id" value="{{$barangay->town_id}}" placeholder="Enter Town ID">
                        @error('town id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('admin.barangays.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
                </div>
        </form> 
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop