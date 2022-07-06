@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 'admin')
        @include('partials.home-admin', ['name' => $name])

    @else
        @include('partials.home-patient')
    @endif
@endsection
