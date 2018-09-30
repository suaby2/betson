@extends('layouts.dashboard')
@section('content')
    <h1>Edit user</h1>
    {!! Form::model($bookmaker, ['route' => 'bookmakers.store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::label('imageUrl', 'imageUrl:') !!}
        {!! Form::text('imageUrl', null, ['class' => 'form-control']) !!}
    </div>
    <div class='form-group'>
        {!! Form::submit('Update User', ['class' => 'btn btn-success form-control']) !!}
    </div>
    {!! Form::close() !!}
@endsection