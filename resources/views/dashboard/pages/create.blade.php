@extends('layouts.dashboard')
@section('content')
    <h1>Create new page</h1>
    <div class="col-ld-10 col-md-10">
        {!! Form::model($page, ['route' => 'pages.store', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'prediction__form__create']) !!}

        <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Tytuł strony'])}}
            </div>
            <div class="form-group">
                {{ Form::label('date', "Data publikacji strony") }}
                {{ Form::date('date', \Carbon\Carbon::now(), ['class' => 'form-control']) }}
            </div>
            {{--<div class="form-group">--}}
                {{--{{ Form::label('category', 'Category') }}--}}
                {{--<select name="category" class="form-control">--}}
                    {{--<option>Wybierz:</option>--}}
                    {{--@foreach($categories as $category)--}}
                        {{--<option value="{{$category->id}}">{{$category->name}}</option>--}}
                    {{--@endforeach--}}
                {{--</select>--}}
            {{--</div>--}}
            <div class="form-group">
                {{Form::label('description', 'Description')}}
                {{Form::textarea('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
            </div>
            <div class="form-group">
                <label for="page_thumbnail">Page Thumbnail</label> <br/>
                <input type="file" name="page_thumbnail" id="page_thumbnail" />
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