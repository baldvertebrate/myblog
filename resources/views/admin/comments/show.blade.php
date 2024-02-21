@extends('adminlte::page')

@section('title', 'Comments -> View comments')

@section('content_header')
    <h1>Comments  ->View Comments</h1>
@stop

@section('content')
   <div class="card">
        <form method="post" action="">
             @csrf
             @method('put')
            <div class="card-body" >
            @if (session('status'))
                <div class="alert alert-success alert-dismissible auto-close">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{session('status')}}
                </div>
            @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{$comment->name}}" readonly>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" value="{{$comment->email}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="comment">Comment</label>
                    <input type="text" name="comment" class="form-control @error('comment') is-invalid @enderror" id="comment" value="{{$comment->comment}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="title" value="{{$comment->blog->title}}" readonly>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            </div>
            <div class="card-footer">
                 <a href="{{route('admin.comments.index')}}" type="cancel" class="btn btn-default float-right">Cancel</a>
            </div>
        </form>   
   </div>
@stop

@section('footer')
    Copyright &copy; 2024. Jaymart's Blog.
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop