<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="flex justify-between px-20 py-10 items-center bg-white">
            <a href="{{ url('/') }}" class="text-xl text-gray-800 font-bold">{{ config('app.name', 'Laravel') }}</h1>
            <div class="flex items-center">
                
                <ul class="flex items-center space-x-6">
                    @guest
                        <li class="font-semibold text-gray-700 hover:text-teal-400">
                            <a href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li class="font-semibold text-gray-700">
                            <a href="">{{ Auth::user()->name }}</a>
                        </li>
                        <li class="font-semibold text-gray-700">
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
