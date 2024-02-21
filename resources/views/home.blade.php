@extends('layouts.template')

@section('content')
<h2 class="margin">Home</h2><br>
  <p></p>
  <div class="row">
    <div class="col-md-12">

        @foreach($blogs as $blog)
            <a href="{{route('home.show', $blog)}}">
                <h3><strong>{{$blog ->title}}</strong></h3>
            </a>
            <p>
            {{$blog ->content,0,150 }}
            </p>
        @endforeach
    </div>
    @endsection