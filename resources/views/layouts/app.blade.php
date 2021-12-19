<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

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
                        <li class="font-semibold text-gray-700 hover:text-teal-400">
                            <a href="{{ route('patients.index') }}">Pacientes</a>
                        </li>

                        <li class="font-semibold text-gray-700 hover:text-teal-400">
                            <a href="{{ route('background.index') }}">Antecedentes</a>
                        </li>

                        <li class="px-6 py-2 text-white bg-teal-400 rounded-lg hover:bg-teal-300">
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

        <main class="flex h-full justify-center mt-24 mb-32">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.add-input-area@4.11.0/dist/jquery.add-input-area.min.js"></script>
    <script>
        $(function() {
            $('#list').addInputArea();
        });
    </script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>
</html>
