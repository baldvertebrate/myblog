@extends('adminlte::page')

@section('title', 'Towns - > Create a town')

@section('content_header')
    <h1>Towns - > Create a new town</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.towns.store')}}">
            @csrf
            @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label for="owner id">Town Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="Enter Town Name">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Zipcode</label>
                        <input type="text" name="zipcode" class="form-control @error('zipcode') is-invalid @enderror" id="zipcode" value="{{old('zipcode')}}" placeholder="Enter Zipcode">
                        @error('zipcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{route('admin.towns.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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