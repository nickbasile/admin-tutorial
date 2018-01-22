@extends('layouts.app')

@section('content')
<div>
    <div>
        <div>Login</div>
        <div>
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div>
                    <label for="email" class="{{ $errors->has('email') ? 'text-red' : '' }}">E-Mail Address</label>
                    <div>
                        <input id="email" type="email" class="{{ $errors->has('email') ? ' border-red' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span>
                                {{ $errors->first('email') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div class="">
                    <label for="password" class="{{ $errors->has('password') ? 'text-red' : '' }}">Password</label>
                    <div class="col-md-6">
                        <input id="password" type="password" class="{{ $errors->has('password') ? 'border-red' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                            <span>
                                {{ $errors->first('password') }}
                            </span>
                        @endif
                    </div>
                </div>

                <div>
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                    </label>
                </div>

                <button type="submit">
                    Login
                </button>

                <div>
                    <a href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
