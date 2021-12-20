@extends('layouts.app')

@section('content')
<div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
    <h3 class="text-2xl font-bold text-center">Ingresa a {{ config('app.name', 'Laravel') }}</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="mt-8">
            <div>
                <label class="block" for="email">Email<label>
                        <input type="email" id="email" name="email"         
                            placeholder="Email"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"
                            value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback block mt-2 text-red-600">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="mt-4">
                <label class="block">Password<label>
                        <input type="password" id="password" name="password"
                            placeholder="Password"
                            class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"
                            required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback block mt-2 text-red-600">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
            </div>
            <div class="flex items-baseline justify-between">
                <button type="submit" class="px-6 py-2 mt-4 text-white bg-teal-400 rounded-lg hover:bg-teal-300">Login</button>
                <a href="{{ route('password.request') }}" class="text-sm text-teal-300 hover:underline hover:text-teal-400">Forgot password?</a>
            </div>
        </div>
    </form>
</div>
@endsection
