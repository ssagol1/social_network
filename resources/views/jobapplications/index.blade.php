@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Job application name</th>
      <th scope="col">User id</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($jobapplications->items() as $jobapplication)
        <tr>
            <td>{{ $jobapplication->id }}</td>
            <td>{{ $jobapplication->application_body }}</td>
            <td>{{ $jobapplication->user_id }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection