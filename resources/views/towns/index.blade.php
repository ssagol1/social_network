@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Town name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($towns->items() as $town)
        <tr>
            <td>{{ $town->id }}</td>
            <td>{{ $town->name }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection