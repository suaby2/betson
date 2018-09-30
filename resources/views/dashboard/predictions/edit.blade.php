@extends('layouts.dashboard')

@section('content')
    <h2>Edit prediction #{{$prediction->id}}</h2>
    <div class="col-lg-12">
        {!! Form::model($prediction, ['route' => ['predictions.update', $prediction->id], 'method' => 'PUT']) !!}
        <div class="row">
            <div class="form-group col-lg-6">
                {{Form::label('first_team', 'Drużyna/Zawodnik #1')}}
                {{Form::text('first_team', null, ['class' => 'form-control', 'placeholder' => 'Drużyna/Zawodnik #1'])}}
            </div>
            <div class="form-group col-lg-6">
                {{Form::label('second_teams', 'Drużyna/Zawodnik #2')}}
                {{Form::text('second_team', null, ['class' => 'form-control', 'placeholder' => 'Drużyna/Zawodnik #2'])}}
            </div>
        </div>
        <div class="form-group">
            <div class="col-lg-4">
                {!! Form::label('1', 'Wygra 1') !!}
                {{--{!! Form::radio('winner', 1) !!}--}}
                <input  type="radio" name="winner" value="1" @if($prediction->winner == 1) checked @endif>
            </div>
            <div class="col-lg-4">
                {!! Form::label('0', 'Remis') !!}
                {{--{!! Form::radio('winner', 0) !!}--}}
                <input  type="radio" name="winner" value="0" @if($prediction->winner == 0) checked @endif>
            </div>
            <div class="col-lg-4">
                {!! Form::label('2', 'Wygra 2') !!}
                {{--{!! Form::radio('winner', 2) !!}--}}
                <input  type="radio" name="winner" value="2" @if($prediction->winner == 2) checked @endif>
            </div>
        </div>
        <div class="form-group">
            {{Form::label('event_start', "Event Start Date")}}
            {{Form::text('event_start', null, ['class' => 'form-control', 'placeholder' => 'Start wydarzenia'])}}
        </div>
        <div class="form-group">
            {{ Form::label('type', 'Game Type') }}
            {{--            {{ Form::select('type[]', $types, null, ['class' => 'form-control']) }}--}}
            <select name="type" id="" class="form-control">
                @for($i = 0; $i<count($types); $i++)
                    <option value="{{$types[$i]}}">{{$types[$i]}}</option>
                @endfor
            </select>
        </div>
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::submit('Update Prediction', ['class' => 'btn btn-primary'])}}
        </div>
        {!! Form::close() !!}
    </div>
@endsection