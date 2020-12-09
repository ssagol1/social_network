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
    @foreach ($workplaces->items() as $workplace)
        <tr>
            <td>{{ $workplace->id }}</td>
            <td>{{ $workplace->title }}</td>
            <td>{{ $workplace->started_at }}</td>
            <td>{{ $workplace->ended_at }}</td>
            <td>{{ $workplace->user_id }}</td>
            <td>{{ $workplace->company_id }}</td>
            <td>{{ $workplace->town_id }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection