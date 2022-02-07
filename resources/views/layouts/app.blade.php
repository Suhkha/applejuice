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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/lib/echarts.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartisan_echarts.js') }}"></script>
    
</head>
<body>
    <div id="app">
        <nav class="flex flex-wrap justify-between px-3 lg:px-20 py-10 items-center text-lg text-gray-700 bg-white">
            <div>
                <a href="{{ url('/') }}">
                    <img src="{{URL::asset('/img/svelfit-logo.png')}}" width="70" alt="">
                </a>
            </div>

            <svg xmlns="http://www.w3.org/2000/svg" id="menu-button" class="h-6 w-6 cursor-pointer md:hidden block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
            </svg>
            <div class="hidden w-full md:flex md:items-center md:w-auto" id="menu">
                <ul class=" pt-4 text-base text-gray-700 md:flex md:justify-between md:pt-0">
                    @guest
                        <li>
                            <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @else
                        <li>
                            <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('patients.index') }}">
                                Pacientes
                            </a>
                        </li>
                        <li>
                            <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('background.index') }}">
                                Antecedentes
                            </a>
                        </li>
                        <li>
                            <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('recipes.index') }}">
                                Recetas
                            </a>
                        </li>
                        <li>
                            <a class="md:p-4 py-2 block hover:text-teal-400" href="{{ route('products.index') }}">
                                Productos
                            </a>
                        </li>
                        <li>
                            <a class="md:p-4 py-2 block text-teal-400" href="{{ route('logout') }}"
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

        <main class="flex h-full justify-center mt-0 md:mt-24 mb-32 md:px-20 px-3">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.add-input-area.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.dataTables.min.js') }}"></script>
    <script>
        $(function() {
            $('#list').addInputArea();

            $('table').DataTable();
        });

        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');


        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });
    </script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
