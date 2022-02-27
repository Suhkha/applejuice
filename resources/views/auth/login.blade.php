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
                <label class="block" for="email">Email<label>
                <input type="email" id="email" name="email" placeholder="Email" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback block mt-2 text-red-600">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="mt-4">
                <label class="block">Password<label>
                <input type="password" id="password" name="password" placeholder="Password" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback block mt-2 text-red-600">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    </form>
</div>
@endsection
