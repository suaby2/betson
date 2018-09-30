@extends('layouts.dashboard')
@section('content')
    <h1>Edit bookmaker</h1>
    <div class="col-lg-10">
        {!! Form::model($bookmaker, ['route' => ['bookmakers.update', $bookmaker->id], 'method' => 'PUT']) !!}
        <div class='form-group'>
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::label('imageUrl', 'imageUrl:') !!}
            {!! Form::text('imageUrl', null, ['class' => 'form-control']) !!}
        </div>
        <div class='form-group'>
            {!! Form::submit('Update bookmaker', ['class' => 'btn btn-success form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection