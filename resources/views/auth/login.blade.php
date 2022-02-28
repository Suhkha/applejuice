@extends('layouts.app')

@section('content')
<div class="px-8 py-6 mt-4 text-left bg-white shadow-lg">
    <div class="flex mb-6 justify-center">
        <img src="{{URL::asset('/img/svelfit-success.svg')}}" width="300" alt="">
    </div>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="mt-8">
            <div>
                <label class="block" for="username">Nombre de usuario<label>
                <input type="text" id="username" name="username" placeholder="Nombre de usuario" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" value="{{ old('username') }}" required autofocus>

                @if ($errors->has('username'))
                    <span class="invalid-feedback block mt-2 text-red-600">
                        <strong>{{ $errors->first('username') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mt-4">
                <label class="block">Contraseña<label>
                <input type="password" id="password" name="password" placeholder="Contraseña" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback block mt-2 text-red-600">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="flex items-baseline justify-between">
                <button type="submit" class="px-6 py-2 mt-4 text-white bg-teal-400 rounded-lg hover:bg-teal-300">Login</button>
            </div>
        </div>
    </form>
</div>
@endsection
