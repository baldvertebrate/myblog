@extends('adminlte::page')

@section('title', 'Vehicles - > Create a vehicle')

@section('content_header')
    <h1>Vehicles - > Create a new vehicle</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.vehicles.store')}}">
            @csrf
            @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label for="owner id">Owner ID</label>
                        <input type="text" name="owner id" class="form-control @error('owner id') is-invalid @enderror" id="owner id" value="{{old('owner_id')}}" placeholder="Enter Owner ID">
                        @error('owner id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Make</label>
                        <input type="text" name="make" class="form-control @error('make') is-invalid @enderror" id="make" value="{{old('make')}}" placeholder="Enter Vehicle Maker">
                        @error('Make')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="content">Model</label>
                        <input type="text" name="model" class="form-control @error('make') is-invalid @enderror" id="make" value="{{old('make')}}" placeholder="Enter Vehicle Maker">
                        @error('Model')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Color</label>
                        <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" value="{{old('color')}}" placeholder="Enter Vehicle Color">
                        @error('Color')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Type</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{old('type')}}" placeholder="Enter Vehicle Type">
                        @error('Type')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Plate Number</label>
                        <input type="text" name="plate number" class="form-control @error('plate number') is-invalid @enderror" id="plate number" value="{{old('plate_number')}}" placeholder="Enter Vehicle Plate Number">
                        @error('Plate Number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
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