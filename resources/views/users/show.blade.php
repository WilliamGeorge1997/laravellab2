@extends('layouts.main')
@section('title', 'Show user')

@section('content')
<div class="mx-auto w-50 mt-3">
    <h2 class="w-50">Show user No. {{ $user->id}}:</h2>
<table class="table mt-3 table-bordered">

    <tbody>

        <tr>
            <td>ID:</td>
            <td>{{ $user->id}}</td>

        </tr>
        <tr>
            <td>Name:</td>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>{{ $user->email }}</td>
        </tr>

    </tbody>
</table>
</div>

@endsection
