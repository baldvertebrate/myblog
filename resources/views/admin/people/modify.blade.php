@extends('adminlte::page')

@section('title', 'People - > Modify Person')

@section('content_header')
    <h1>People - > Modify Person</h1>
@stop

@section('content')
    <div class="card">
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div> 
            @endif
        <form method="post" action="{{route('admin.people.update', $people)}}">
            @csrf
            @method('put')
                <div class="card-body">
                <div class="form-group">
                        <label for="owner id">First Name</label>
                        <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror" id="first_name" value="{{$people->first_name}}" placeholder="Enter First Name">
                        @error('first name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Middle Name</label>
                        <input type="text" name="middle_name" class="form-control @error('middle_name') is-invalid @enderror" id="middle_name" value="{{$people->middle_name}}" placeholder="Enter Middle Name">
                        @error('middle name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 
                    <div class="form-group">
                        <label for="content">Last Name</label>
                        <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" id="last_name" value="{{$people->last_name}}" placeholder="Enter Last Name">
                        @error('last name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Sex</label>
                        <input type="text" name="sex" class="form-control @error('sex') is-invalid @enderror" id="sex" value="{{$people->sex}}" placeholder="Enter Sex">
                        @error('sex')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Contact Number</label>
                        <input type="text" name="contact_number" class="form-control @error('contact_number') is-invalid @enderror" id="contact_number" value="{{$people->contact_number}}" placeholder="Enter Contact Number">
                        @error('contact number')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Category</label>
                        <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" value="{{$people->category}}" placeholder="Enter Person Category">
                        @error('category')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="owner id">Specifics</label>
                        <input type="text" name="specifics" class="form-control @error('specifics') is-invalid @enderror" id="first_name" value="{{$people->specifics}}" placeholder="Enter Specifics">
                        @error('specifics')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                         @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$people->email}}" placeholder="Enter Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Driver's License Code</label>
                        <input type="text" name="license_code" class="form-control @error('license_code') is-invalid @enderror" id="license_code" value="{{$people->license_code}}" placeholder="Enter License Code">
                        @error('license code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Town Name</label>
                        <input type="text" name="Town" class="form-control @error('Town') is-invalid @enderror" id="Town" value="{{$people->Town}}" placeholder="Enter Town Name">
                        @error('town')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="content">Barangay ID</label>
                        <input type="text" name="barangay_id" class="form-control @error('barangay_id') is-invalid @enderror" id="barangay_id" value="{{$people->barangay_id}}" placeholder="Enter Barangay ID">
                        @error('barangay_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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