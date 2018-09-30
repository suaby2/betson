@extends('layouts.dashboard')

@section('content')
    <h2>Tworzenie analizy</h2>
    <div class="col-lg-10">
        {!! Form::model($prediction, ['route' => 'predictions.store', 'method' => 'POST', 'class' => 'prediction__form__create']) !!}
        <div class="row">
            <div class="form-group col-lg-6 col-md-6">
                {{Form::label('first_team', 'Drużyna/Zawodnik #1')}}
                {{Form::text('first_team', '', ['class' => 'form-control', 'placeholder' => 'Drużyna/Zawodnik #1'])}}
            </div>
            <div class="form-group col-lg-6 col-md-6">
                {{Form::label('second_teams', 'Drużyna/Zawodnik #2')}}
                {{Form::text('second_team', '', ['class' => 'form-control', 'placeholder' => 'Drużyna/Zawodnik #2'])}}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-lg-4 col-md-4">
                {{--{!! Form::label('1', 'Wygra 1') !!}--}}
                {{--{!! Form::radio('winner', 1) !!}--}}
                <label class="btn btn-primary btn-block">
                    <input type="radio" name="winner" value="1" autocomplete="off">
                    <span class="glyphicon glyphicon-ok"></span>Drużyna/Zawodnik #1
                </label>
            </div>
            <div class="col-lg-4 col-md-4">
                {{--{!! Form::label('0', 'Remis') !!}--}}
                {{--{!! Form::radio('winner', 0) !!}--}}
                <label class="btn btn-warning btn-block">
                    <input type="radio" name="winner" value="0" autocomplete="off">
                    <span class="glyphicon glyphicon-ok"></span>Remis
                </label>
            </div>
            <div class="col-lg-4 col-md-4">
                {{--{!! Form::label('2', 'Wygra 2') !!}--}}
                {{--{!! Form::radio('winner', 2) !!}--}}
                <label class="btn btn-primary btn-block">
                    <input type="radio" name="winner" value="0" autocomplete="off">
                    <span class="glyphicon glyphicon-ok"></span>Drużyna/Zawodnik #2
                </label>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                {{ Form::label('event_start_date', "Data wydarzenia") }}
                {{ Form::date('event_start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('event_start_hour', 'Godzina wydarzenia') }}
                {{ Form::text('event_start_hour', '', ['class' => 'form-control'])}}
            </div>
        </div>
        <div class="form-group">
            {{ Form::label('type', 'Sport') }}
            <select name="type" class="form-control">
                <option>Wybierz:</option>
                @foreach($gameTypes as $types)
                    <option value="{{$types->id}}">{{$types->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{ Form::label('bookmaker', 'Bukmacher') }}

            <select name="bookmaker" id="" class="form-control">
                <option>Wybierz:</option>
                @foreach($bookmakers as $bookmaker)
                    <option value="{{$bookmaker->id}}">{{$bookmaker->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Save Prediction', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection