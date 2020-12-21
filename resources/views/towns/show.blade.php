@extends('layouts.app')

@section('content')
    <div>
        <h3 class="mt-3">Towns detail</h3>
        <ul class="list-unstyled">
            <li>Name: {{ $towns->name }}</li>
            <li><a href="https://en.wikipedia.org/w/index.php?search={{ $towns->name }}">Wikipedia link</a></li>
        </ul>

        <a href="{{ route('towns.index') }}" class="btn btn-outline-primary">Back</a>
    </div>
@endsection