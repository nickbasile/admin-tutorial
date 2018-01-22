@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="fixed pin-b w-full bg-green text-white">
        {{ session('status') }}
    </div>
@endif

<div class="flex items-center justify-center h-9/10">
    <div class="p-8 bg-white rounded shadow-lg m-6 w-full sm:w-1/2 md:w-1/3 lg:w-1/4 lg:max-w-md">
        <h2 class="text-grey-darkest text-2xl mb-4 text-center tracking-wide">Reset Password</h2>
        <form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}

            <div class="mb-4">
                <label for="email" class="block mb-2 uppercase tracking-wide text-sm {{ $errors->has('email') ? 'text-red-dark' : 'text-grey-darker' }}">E-Mail</label>
                <input id="email" type="email" class="p-2 border w-full text-grey-darkest {{ $errors->has('email') ? ' border-red-dark' : 'border-grey-darkest' }}" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="mt-2 block text-sm text-red-dark">
                        {{ $errors->first('email') }}
                    </span>
                @endif
            </div>

            <button type="submit" class="block mx-auto my-4 bg-teal hover:bg-teal-dark text-white text-lg rounded px-4 py-2">
                Send Reset Link
            </button>
            <div class="text-center">
                <a href="{{ route('login') }}" class="no-underline tracking-wide text-sm text-grey-darkest hover:text-black" >
                    Remember Your Password?
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
