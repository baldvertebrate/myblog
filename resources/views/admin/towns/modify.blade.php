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
        <form method="post" action="{{route('admin.towns.update', $town)}}">
            @csrf
            @method('put')
                <div class="card-body">
                <div class="form-group">
                        <label for="owner id">Town Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$town->name}}" placeholder="Enter Town Name">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Zipcode</label>
                        <input type="text" name="zipcode" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" value="{{$town->zipcode}}" placeholder="Enter Zipcode">
                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('admin.blogs.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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