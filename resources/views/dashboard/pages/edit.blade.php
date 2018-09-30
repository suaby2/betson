@extends('layouts.dashboard')
@section('content')
    <h1>Edytuj:  {{$page->title}}</h1>
    <div class="col-ld-10 col-md-10">
        {!! Form::model($page, ['route' => ['pages.update', $page->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{Form::label('title', 'Title')}}
            {{Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Tytuł strony'])}}
        </div>
        <div class="form-group">
            {{ Form::label('date', "Data publikacji strony") }}
            {{ Form::date('date', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('category', 'Category') }}
            <select name="category" class="form-control">
                <option value="0">Wybierz:</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            <label for="publish">Opublikowane</label>
            Tak
            <input type="radio" value="1" name="published" @if(old('published')) checked @endif>
            Nie
            <input type="radio" value="0" name="published" @if(!old('published')) checked @endif>

        </div>
        <div class="row">
            <div class="form-group">
                {{Form::submit('Save Prediction', ['class' => 'btn btn-primary'])}}
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection
