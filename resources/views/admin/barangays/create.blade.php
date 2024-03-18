@extends('adminlte::page')

@section('title', 'Barangays - > Create a Barangay')

@section('content_header')
    <h1>Barangays - > Create a new Barangay</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.barangays.store')}}">
            @csrf
            @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label for="owner id">Barangay Name</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{old('name')}}" placeholder="Enter Barangay Name">
                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Town ID</label>
                        <input type="text" name="town_id" class="form-control @error('town_id') is-invalid @enderror" id="town_id" value="{{old('town_id')}}" placeholder="Enter Town ID">
                        @error('town id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
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