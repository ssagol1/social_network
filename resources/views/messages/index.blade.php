@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Role name</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($messages->items() as $message)
        <tr>
            <td>{{ $message->id }}</td>
            <td>{{ $message->message_body }}</td>
            <td>{{ $message->from_id }}</td>
            <td>{{ $message->to_id }}</td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection