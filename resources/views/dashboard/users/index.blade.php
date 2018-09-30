@extends('layouts.dashboard')
@section('content')
    <a class="btn btn-info" href="/dashboard/users/create">CREATE USER</a>

    <div class="col-md-12">
        <div class="row">
            <div class="col-md-9">
                <h1>Users</h1>
            </div>
        </div>
        <div class="well">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Actions</th>
                    <th style="width: 36px;"></th>
                </tr>
                </thead>
                <tbody>

                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-secondary"> Edit</a>
                            <a href="{{ route('users.show', $user->id) }}" class="btn btn-secondary"> Info</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection