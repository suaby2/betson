@extends('layouts.dashboard')
@section('content')
   <h2>User: {{$user->name}}</h2>
   <pre>
      <h3>Predicitons: {{$user->predictions}}</h3>
   </pre>

   @foreach($user->predictions as $prediction)
      {{$prediction->first_team}}
   @endforeach

@endsection