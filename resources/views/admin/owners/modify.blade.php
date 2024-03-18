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
        <form method="post" action="{{route('admin.owners.update', $owner)}}">
            @csrf
            @method('put')
            <div class="form-group">
                        <label for="owner id">Person ID</label>
                        <input type="text" name="people_id" class="form-control @error('people_id') is-invalid @enderror" id="people_id" value="{{$owner->people_id}}" placeholder="Enter Person ID">
                        @error('people id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Vehicle ID</label>
                        <input type="text" name="vehicle_id" class="form-control @error('vehicle_id') is-invalid @enderror" id="vehicle_id" value="{{$owner->vehicle_id}}" placeholder="Enter Vehicle ID">
                        @error('vehicle id')
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