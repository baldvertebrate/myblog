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
        <form method="post" action="{{route('admin.vehicles.update', $vehicle)}}">
            @csrf
            @method('put')
                <div class="card-body">
                <div class="form-group">
                        <label for="owner id">Owner ID</label>
                        <input type="text" name="owner_id" class="form-control @error('owner_id') is-invalid @enderror" id="owner_id" value="{{$vehicle->owner_id}}" placeholder="Enter Owner Number">
                        @error('owner id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Make</label>
                        <input type="text" name="make" class="form-control @error('make') is-invalid @enderror" id="make" value="{{$vehicle->make}}" placeholder="Enter Vehicle Maker">
                        @error('Make')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="content">Model</label>
                        <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="make" value="{{$vehicle->model}}" placeholder="Enter Vehicle Model">
                        @error('Model')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Color</label>
                        <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" value="{{$vehicle->color}}" placeholder="Enter Vehicle Color"> 
                        @error('Color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Type</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{$vehicle->type}}" placeholder="Enter Vehicle Type"> 
                        @error('Type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Plate Number</label>
                        <input type="text" name="plate number" class="form-control @error('plate number') is-invalid @enderror" id="plate number" value="{{$vehicle->plate_number}}" placeholder="Enter Vehicle Plate Number">                         @error('Plate Number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{route('admin.vehicles.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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