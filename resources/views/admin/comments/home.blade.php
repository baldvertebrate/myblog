@extends('adminlte::page')

@section('title', 'Comments')

@section('content_header')
    <h1>Comments</h1>
@stop

@section('content')
 <div class="card">
    <div class="card-header">
        <h3 class="card-title">Comment List</h3>
    </div>
        <div class="card-body">
            @if (session('status'))
             <div class="alert alert-success alert-dismissible auto-close">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{session('status')}}
             </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th style="width: 10px">ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Comment</th>
                    <th>Title</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                      <tr>
                        <td>{{$comment->id}}</td>
                        <td>{{$comment->name}}</td>
                        <td>{{$comment->email}}</td>
                        <td>{{$comment->comment}}</td>
                        <td>{{$comment->blog->title}}</td>
                        <td>
                            <a href="{{ route('admin.comments.show', ['comment' => $comment->id]) }}" class="btn btn-warning"><i class="fas fa-eye"></i></a>&nbsp;
                            <a href="{{route('admin.comments.delete',['comment' => $comment->id])}}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            
                        </td>
                      </tr>  
                    @endforeach
                </tbody>
            </table>
        </div>
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