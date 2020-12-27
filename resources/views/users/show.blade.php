@extends('layouts.app')

@php
$loggedInUser = \Auth::user();
@endphp

@section('content')

<div class="mt-5">
    <h1 class="text-center">{{ $user->name }}</h1>
    <img src="https://picsum.photos/300" alt="profile image" class="d-block mx-auto rounded-circle">

    <div class="btn-group mt-5">
        <a class="btn btn-secondary" href="{{ route('users.index') }}">Back</a>
        <a class="btn btn-primary" href="{{ route('users.edit', ['user' => $user]) }}">Edit</a>
    </div>
</div>
@endsection