@extends('layouts.pages')
@section('content')
    <div class="container">
        <header class="page__header ">
            <h1>{{$page->title}}</h1>
                <img src="{{ URL::asset($page->date.'/'.$page->page_thumbnail) }}" alt="">
        </header>
        @if(count($predictions) > 0)
            <ul>
                @foreach($predictions->all() as $prediction)
                    <li>
                        <p>

                            #ID: {{$prediction->id}} | {{$prediction->first_team}} VS {{$prediction->second_team}}
                        </p>
                        <p>{{$prediction->description}}</p>

                    </li>
                @endforeach
            </ul>
        @endif
    </div>

@endsection
