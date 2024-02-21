@extends('adminlte::page')

@section('title', 'Users - > Reset user password')

@section('content_header')
    <h1>Users - > Reset Password</h1>
@stop

@section('content')
<div class = "row">   
    <div class ="col-lg-6 offset-lg-3" >
        <div class="card">  
            <form method="post" action="{{route('admin.users.resetOk', $user)}}">
                @csrf
                    @method('patch')
                    <div class="card-header"> 
                        <h3>System Confirmation</h3>
                        </div>
                            <div class="card-body">
                            <p>You are about to reset the password of <strong>{{$user->name}}</strong> to <strong>P@ssw0rd</strong>. Are you certain whatever you're doing is worth it?</p>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Yes</button>
                            <a href="{{route('admin.users.index')}}" type="button" class="btn btn-default float-right">No</a>
                    </div>
            </form> 
        </div>
    </div> 
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop