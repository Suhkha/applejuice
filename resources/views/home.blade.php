@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 'admin')
        @include('partials.home-admin')

    @else
        @include('partials.home-patient')
    @endif
@endsection
