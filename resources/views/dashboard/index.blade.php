@extends('layouts.dashboard')
@section('content')
    <div class="row">
        @if(!empty($users))
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="text-center ">Total Users</p>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$users->count()}}</h1>
                        <small>users</small>

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('users.index') }}" class="btn btn-default">Zobacz wszystkie</a>
                    </div>
                </div>
            </div>
        @endif
            @if(!empty($pages))
            <div class="col-lg-4 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <p class="text-center ">Total Pages</p>
                    </div>
                    <div class="panel-body text-center">
                        <h1>{{$pages->count()}}</h1>
                        <small>pages</small>

                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('pages.index') }}" class="btn btn-default">Zobacz wszystkie</a>
                    </div>
                </div>
            </div>
        @endif
            @if(!empty($predictions))
                <div class="col-lg-4 col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <p class="text-center ">{{ $pageConfig->title }}</p>
                        </div>
                        <div class="panel-body text-center">
                            <h1>{{$predictions->count()}}</h1>
                            <small>predictions</small>

                        </div>
                        <div class="panel-footer">
                            <a href="{{ route('predictions.index') }}" class="btn btn-default">Zobacz wszystkie</a>
                        </div>
                    </div>
                </div>
        @endif
        @if(!empty($predictions) && !empty($users))
            <div class="col-lg-6 col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center form-group">
                        <p style="display:inline-block">Total Predictions in</p>
                        <select name="predictions_month" id="prediction_month" class="form-control">
                            <option value="">September</option>
                            <option value="">October</option>
                        </select>
                    </div>
                    <div class="panel-body text-center">
                        <div class="col-lg-6">
                            <h1>14</h1>
                            <small>pages</small>
                        </div>
                        <div class="col-lg-6">
                            <h1>1432</h1>
                            <small>predictions</small>
                        </div>
                    </div>
                    <div class="panel-footer">
                        {{--<a href="{{ route('predictions.index') }}" class="btn btn-default">Zobacz wszystkie</a>--}}
                    </div>
                </div>
            </div>
        @endif
    </div>

@endsection
