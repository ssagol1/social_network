@extends('layouts.app')
@section('content')
<a class="btn btn-outline-primary mt-5" href="{{ route('towns.create') }}">Add</a>
<table class="table table-striped mt-3">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Town name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($towns->items() as $town)
        <tr>
            <td>{{ $town->id }}</td>
            <td>{{ $town->name }}</td>

            <td>
            <a class="btn btn-outline-primary" href="{{ route('towns.show', ['town' => $town->id]) }}">Details</a>
            <a class="btn btn-outline-primary" href="{{ route('towns.edit', ['town' => $town->id]) }}">Edit</a>
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection