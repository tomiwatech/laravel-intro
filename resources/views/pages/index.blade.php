@extends('layouts.app')

@section('content')
   <div class="jumbotron text-center">
     <h1> Welcome to Laravel</h1>    
     <p>Name: {{$title}}</p>
     <p>Designation: Software Engineer</p>
   <p>
  <a class="btn btn-primary btn-lg" href="/services" role="button">Learn more &raquo;</a>
  <a class="btn btn-success btn-lg" href="/register" role="button">Register &raquo;</a>
   </p>
   </div>
@endsection
