@extends('layouts.app')


@section('content')

     <h1 style="text-align: center;"> Welcome to Laravel</h1>
     <p style="text-align: center;">This is the services page</p>
     @if(count($expertise)>0)

       @foreach($expertise as $service)
          <ul class="list-group">
              <li class="list-group-item">{{$service}}</li>
          </ul>
       @endforeach
  
     @endif

@endsection

