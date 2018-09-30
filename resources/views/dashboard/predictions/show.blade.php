@extends('layouts.dashboard')
@section('content')
    <div class="row">
        <h2>Predykcja #{{$prediction->id}}</h2>
        <div class="col-md-11 text-center">
            <div class="bg-info lead" style="padding:5px 0; margin-bottom: 0;">WTA Cincinnati - Tytuł na sztywno</div>
            <div class="panel panel-warning panel-pricing">
                <div class="panel-heading">
                    <i class="fa fa-desktop"></i>
                    <h3>{{$prediction->first_team}} vs {{$prediction->second_team}}</h3>
                </div>
                <ul class="list-group text-center">
                    <li class="list-group-item"><i class="fa fa-check"></i><strong>Type: </strong>{{$prediction->type}}</li>
                    <li class="list-group-item"><i class="fa fa-check"></i><strong>Wybór: </strong>{{$winner}}</li>
                    <li class="list-group-item"><i class="fa fa-check"></i><strong>Start: </strong> {{$prediction->event_start_date}} / {{$prediction->event_start_hour}}</li>
                    <li class="list-group-item"><i class="fa fa-check"></i>
                        <p style="display:block">Bukmacher: </p>
                        <img src="{{ asset('assets/images/'. $prediction->bookmaker->imageUrl) }}.jpg" style="width:150px; height: auto;" alt="{{$prediction->bookmaker->name}}">
                    </li>
                </ul>
                <div class="panel-body text-center">
                    <p><strong>Analiza:<br></strong> {{$prediction->description}}</p>
                </div>
                <div class="panel-footer clearfix">
                    @if($userRoleName == 'master')
                        {{ Form::open(['route' => ['predictions.destroy', $prediction->id], 'method' => 'delete' , 'class' => 'pull-left']) }}
                        <button class="btn btn-danger" type="submit">Delete</button>
                        {{ Form::close() }}
                        <a class="btn btn-warning pull-right" href="/dashboard/predictions/{{$prediction->id}}/edit">Edit</a>
                        @else
                        <a class="btn btn-block btn-warning" href="/dashboard/predictions/{{$prediction->id}}/edit">Edit</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection