@extends('layouts.dashboard')

@section('content')
    <h2>Dashboard</h2>

    @if(count($predictions) > 0)
        <ul class="predictions predictions__list row">
            @foreach($predictions->all() as $prediction)
                <li class="col-md-4">
                    <div class="bg-info lead text-center" style="padding:5px 0; margin-bottom: 0;">WTA Cincinnati - Tytuł na sztywno</div>
                    <div class="panel panel-warning panel-pricing text-center">
                        <div class="panel-heading">
                            <i class="fa fa-desktop"></i>
                            {{$prediction->first_team}}<br>
                            vs <br>
                            {{$prediction->second_team}}
                        </div>
                        <ul class="list-group text-center">
                            <li class="list-group-item col-lg-4 col-md-4">
                                <i class="fa fa-check"></i>
                                <strong>Type: </strong>
                                <br>
                                {{$prediction->type}}
                            </li>
                            <li class="list-group-item col-lg-4 col-md-4"><i class="fa fa-check"></i><strong>Wybór: </strong>
                                @if($prediction->winner == 1)
                                    {{$prediction->first_team}}
                                @elseif($prediction->winner == 0)
                                    Remis
                                @else
                                    {{$prediction->second_team}}
                                @endif
                            </li>
                            <li class="list-group-item col-md-4">
                                <i class="fa fa-check"></i>
                                <strong>Start: </strong>
                                <br>
                                {{$prediction->event_start_date}}</li>
                        </ul>
                        <div class="panel-body text-center">
                            <p>{{ str_limit($prediction->description, $limit = 200, $end = '...') }}</p>
                        </div>
                        <div class="panel-footer clearfix">
                            <a class="btn btn-block btn-warning" href="/dashboard/predictions/{{$prediction->id}}">Show</a>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
    <div class="row">
        <a href="/dashboard/predictions/create" class="btn btn-info">Create Prediction</a>
    </div>
@endsection