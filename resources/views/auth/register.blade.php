@extends('layouts.auth')
@section('content')
<div class="col-md-6 mx-auto mt-5 justify-content-center">
    <div class="card">
        <div class="card-header">Register as a new user</div>
        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <!-- user name -->
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="{{ @old('email') }}" name="name" type="text" class="form-control" id="name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>

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

                <!-- password confirm polje -->
                <div class="form-group">
                    <label for="password-confirmation">Repeat your password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password-confirmation">
                    @if ($errors->has('password_confirmation'))
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="town">Town</label>
                    {{ Form::select('town_id', $towns, 1, ['class' => 'form-control', 'id' => 'town']) }}
                </div>

                <div class="mt-3">
                    <a href="{{ route('login') }}" class="btn btn-link float-right">Login</a>
                    <div class="text-center float-right">
                        <button type="submit" class="btn btn-primary">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection