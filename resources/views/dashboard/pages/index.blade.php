@extends('layouts.dashboard')
@section('content')
    @if(count($pages) > 0)
        <div class="row">
            <ul class="predictions predictions__list">
                @foreach($pages->all() as $page)
                    <li class="col-md-3">
                        <div class="panel panel-warning panel-pricing text-center">
                            <div class="panel-heading">
                                <h4>{{$page->title}}</h4>
                            </div>
                            {{--<ul class="list-group text-center">--}}
                                {{--<li class="list-group-item col-lg-4 col-md-4">--}}

                                {{--</li>--}}
                            {{--</ul>--}}
                            {{--<div class="panel-body text-center">--}}

                            {{--</div>--}}
                            <div class="panel-footer clearfix">
                                <div class="col-lg-12">
                                    <a class="btn btn-block btn-info" href="/pages/{{$page->slug}}">Pokaż stronę</a>
                                </div>
                                <div class="col-lg-12">
                                    <a class="btn btn-block btn-danger" href="/dashboard/pages/{{$page->id}}/edit">Edytuj stronę</a>
                                </div>

                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="col-lg-12">
            <a class="btn btn-info" href="/dashboard/pages/create">Create Page</a>
        </div>

@endsection