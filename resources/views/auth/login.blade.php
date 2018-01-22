@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center h-9/10">
    <div class="p-8 bg-white rounded shadow-lg m-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 lg:max-w-md">
        <h2 class="text-grey-darkest text-2xl mb-4 text-center tracking-wide">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="mb-4">
                <label for="email" class="block mb-2 uppercase tracking-wide text-sm {{ $errors->has('email') ? 'text-red-dark' : 'text-grey-darker' }}">E-Mail</label>
                <input id="email" type="email" class="p-2 border w-full text-grey-darkest {{ $errors->has('email') ? ' border-red-dark' : 'border-grey-darkest' }}" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="mt-2 block text-sm text-red-dark">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-2 uppercase tracking-wide text-sm {{ $errors->has('password') ? 'text-red-dark' : 'text-grey-darker' }}">Password</label>
                <input id="password" type="password" class="p-2 border w-full text-grey-darkest {{ $errors->has('password') ? 'border-red-dark' : 'border-grey-darkest' }}" name="password" required>
                @if ($errors->has('password'))
                    <span class="mt-2 block text-sm text-red-dark">
                        {{ $errors->first('password') }}
                    </span>
                @endif
            </div>

            <label class="flex items-center mb-2 uppercase tracking-wide text-sm text-grey-darker">
                <input class="mr-2" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
            </label>

            <button class="block mx-auto my-4 bg-teal hover:bg-teal-dark text-white text-lg rounded px-4 py-2" type="submit">
                Login
            </button>

            <div class="text-center">
                <a href="{{ route('password.request') }}" class="no-underline tracking-wide text-sm text-grey-darkest hover:text-black" >
                    Forgot Your Password?
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
