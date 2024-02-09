@extends('layouts.main')


@section('title', 'Users List')


@section('content')
<table class="table text-center container">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Actions</th>
    </thead>
    <tbody>
       @foreach($users as $user)
        <tr>
            <td>{{ $user->id }}</td>
            <td><a href="users/{{ $user->id }}" class="text-decoration-none">{{ $user->name }}</a></td>
            <td>{{ $user->email }}</td>
            <td>
                <a href="users/{{ $user->id }}/edit" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Delete</a>
            </td>
            <td></td>
        </tr>
       @endforeach
    </tbody>
</table>
@endsection

