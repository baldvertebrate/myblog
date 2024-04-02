@extends('adminlte::page')

@section('title', 'People - > Create a person')

@section('content_header')
    <h1>People - > Create a new person</h1>
@stop

@section('content')
    <div class="card">
        <form method="post" action="{{route('admin.people.store')}}">
            @csrf
            @method('post')
                <div class="card-body">
                    <div class="form-group">
                        <label for="owner id">First Name</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" value="{{old('first_name')}}" placeholder="Enter First Name">
                        @error('first name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" value="{{old('middle_name')}}" placeholder="Enter Middle Name">
                        @error('middle name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="content">Last Name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name" value="{{old('last_name')}}" placeholder="Enter Last Name">
                        @error('last name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Sex</label>
                        <input type="text" name="sex" class="form-control @error('sex') is-invalid @enderror" id="sex" value="{{old('sex')}}" placeholder="Enter Sex">
                        @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" value="{{old('contact_number')}}" placeholder="Enter Contact Number">
                        @error('contact number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Category</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" value="{{old('category')}}" placeholder="Enter Person Category">
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Specifics</label>
                        <input type="text" name="specifics" class="form-control @error('specifics') is-invalid @enderror" id="category" value="{{old('specifics')}}" placeholder="Enter Person Specifics">
                        @error('specifics')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{old('email')}}" placeholder="Enter Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Driver's License Code</label>
                        <input type="text" name="license_code" class="form-control @error('license_code') is-invalid @enderror" id="license_code" value="{{old('license_code')}}" placeholder="Enter License Code">
                        @error('license code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Town</label>
                        <input type="text" name="Town" class="form-control @error('Town') is-invalid @enderror" id="Town" value="{{old('Town')}}" placeholder="Enter Town Name">
                        @error('Town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Barangay ID</label>
                        <input type="text" name="barangay_id" class="form-control @error('barangay_id') is-invalid @enderror" id="barangay_id" value="{{ old('barangay_id') }}" placeholder="Enter Barangay ID">
                        @error('barangay_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        @if ($errors->has('barangay_id') && $errors->first('barangay_id') === "The selected barangay ID is invalid.")
                        <span class="invalid-feedback" role="alert">
                            <strong>The provided Barangay ID does not exist.</strong>
                        </span>
                        @endif
                        </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                    <a href="{{route('admin.people.index')}}" type="button" class="btn btn-default float-right">Cancel</a>
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