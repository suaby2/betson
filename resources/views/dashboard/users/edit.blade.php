@extends('layouts.dashboard')
@section('content')
    <h1>Edit user</h1>
    {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'PUT']) !!}
        <div class='form-group'>
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('email', 'email:') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::submit('Update User', ['class' => 'btn btn-success form-control']) !!}
        </div>
    {!! Form::close() !!}
@endsection