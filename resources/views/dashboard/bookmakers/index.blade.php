@extends('layouts.dashboard')
@section('content')
    <div class="col-md-12">
        <a class="btn btn-info" href="/dashboard/bookmakers/create">ADD BOOKMAKER</a>
        <div class="row">
            <div class="col-md-9">
                <h1>Bookmakers</h1>
            </div>
        </div>
        <div class="well">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>imageUrl</th>
                    <th><strong>Actions</strong></th>
                </tr>
                </thead>
                <tbody>

                @foreach ($bookmakers as $bookmaker)
                    <tr>
                        <td>{{ $bookmaker->id }}</td>
                        <td>{{ $bookmaker->name }}</td>
                        <td>{{ $bookmaker->imageUrl }}</td>
                        <td>
                            <a href="{{ route('bookmakers.edit', $bookmaker->id) }}" class="btn btn-secondary"> Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection