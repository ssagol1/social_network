@extends('layouts.auth')
@section('content')
<div class="col-md-6 mx-auto mt-5 justify-content-center">
    <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input value="{{ @old('email') }}" name="email" type="text" class="form-control"
                        id="email">
                    @if($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <!-- password polje -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password">
                    @if($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <!-- register link -->
                <a href="{{ route('register') }}" class="btn btn-link float-right">Register</a>
                <div class="text-center float-right">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection