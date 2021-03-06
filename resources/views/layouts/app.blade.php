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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <script src="https://kit.fontawesome.com/b61b350b0d.js" crossorigin="anonymous"></script>

    @auth
        @if (Auth::user()->role == 'patient')
            <link rel="stylesheet" href="{{ url('font/icons/css/icons-1.css') }}" />
            <link rel="stylesheet" href="{{ url('font/icons/css/icons-2.css') }}" />
        @endif
    @endauth
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/lib/echarts.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartisan_echarts.js') }}"></script>
    
</head>
<body>
    <div id="app">
        @auth
            @if (Auth::user()->role == 'patient')
                @if (isset($agenda->full_date))
                    <div class="grid grid-cols-1">
                        <a href="" class="bg-orange-500">
                        <div class="flex flex-col p-6 relative">
                            <p class="block z-10 text-xs lg:text-base text-white text-center">
                                <span class="font-bold">Próxima cita: </span>{{ \Carbon\Carbon::parse(strtotime($agenda->full_date))->formatLocalized('%d de %B de %Y') }} {{!isset($agenda->location) ? '' : "en ".$agenda->location }}
                            </p>
                        </div>
                        </a>
                    </div>
                @endif
            @endif
        @endauth
        
        @include('partials.navigation')

        @guest
            <main class="flex h-full justify-center mt-0 md:mt-24 mb-32">
                @yield('content')
            </main>
        @else
            @if (Auth::user()->role == 'admin')
                <main class="flex h-full justify-center mt-0 md:mt-24 mb-32 md:px-20 px-3">
                    @yield('content')
                </main>
            @else
                <main class="flex h-full justify-center">
                    @yield('content')
                </main>
            @endif
        @endif
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.add-input-area.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.dataTables.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    
    <script src="{{ asset('js/app.js') }}"></script>
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

        if ($('.details-wrapper').length) {
            $('.details').slick({
                dots: false,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 3,
            });
        }

        if ($('.plans-wrapper').length) {
            $('.plans').slick({
                dots: false,
                arrows: false,
                infinite: false,
                speed: 300,
                slidesToShow: 2,
                slidesToScroll: 1,
            });
        }

        $('form input').keydown(function (e) {
            if (e.keyCode == 13) {
                e.preventDefault();
                return false;
            }
        });
</script>

</body>
</html>
