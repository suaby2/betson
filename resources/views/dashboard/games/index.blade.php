@extends('layouts.dashboard')
@section('content')
    @foreach($games as $game)
        <li>ID: {{$game->id}} | NAME: {{$game->name}}</li>
    @endforeach
@endsection