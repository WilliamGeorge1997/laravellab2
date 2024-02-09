@extends('layouts.main')

@section('title', 'Create user')
@section('content')


<form class="form-floating w-50 mx-auto mt-5">
    <h2 class="mb-4">Create new user</h2>

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="name" placeholder="Your name">
        <label for="name">Your name</label>
      </div>

    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="email" placeholder="Email address">
        <label for="email">Email address</label>
      </div>

        <input type="submit" value="Submit" class="btn btn-success">
  </form>
@endsection
