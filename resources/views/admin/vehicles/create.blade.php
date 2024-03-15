@extends('adminlte::page')

@section('title', 'Blogs - > Add New Vehicle')

@section('content_header')
    <h1>Blogs - > Add New Vehicle</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.vehicles.store')}}">
            @csrf
            @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label for="make">Make</label>
                        <input type="text" name="make" class="form-control @error('make') is-invalid @enderror" id="make" value="{{old('make')}}" placeholder="Enter blog make">
                        @error('make')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="model">Model</label>
                        <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" id="model" value="{{old('model')}}" placeholder="Enter blog model">
                        @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="color">Color</label>
                        <input type="text" name="color" class="form-control @error('color') is-invalid @enderror" id="color" value="{{old('color')}}" placeholder="Enter blog color">
                        @error('color')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control @error('type') is-invalid @enderror" id="type" value="{{old('type')}}" placeholder="Enter blog type">
                        @error('type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="plate_number">Plate Number</label>
                        <input type="text" name="plate_number" class="form-control @error('plate_number') is-invalid @enderror" id="title" value="{{old('plate_number')}}" placeholder="Enter blog plate_number">
                        @error('plate_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="owner_id">Owner ID</label>
                        <textarea name="owner_id" class="form-control  @error('owner_id') is-invalid @enderror" id="owner_id" rows="10"  placeholder="Enter blog content">{{old('owner_id')}}</textarea>
                        @error('owner_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
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