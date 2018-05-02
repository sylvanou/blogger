@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center bg-image">
      <div class="index-content">
          <h1>{{$title}}</h1>
          <p>Where We Share Ideas</p>
          {{-- @if(Auth::guest()) --}}
              <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a><a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
          {{-- @endif --}}
      </div>
  </div>
@endsection