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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="{{ asset('js/lib/echarts.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartisan_echarts.js') }}"></script>
    
</head>
<body>
    <div id="app">
        @include('partials.navigation')

        <main class="flex h-full justify-center mt-0 md:mt-24 mb-32 md:px-20 px-3">
            @yield('content')
        </main>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/lib/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.add-input-area.min.js') }}"></script>
    <script src="{{ asset('js/lib/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        $(function() {
            $('#list').addInputArea();
            $('table').DataTable();

            var maxRand = 4;
            var randNum = Math.floor( Math.random() * maxRand );

            var img0 = '/img/svelfit-read.svg';
            var img1 = '/img/svelfit-exercise.svg';
            var img2 = '/img/svelfit-water.svg';
            var img3 = '/img/svelfit-win.svg';

            var imgtwo0 = '/img/svelfit-shop.svg';
            var imgtwo1 = '/img/svelfit-health.svg';
            var imgtwo2 = '/img/svelfit-options-food.svg';
            var imgtwo3 = '/img/svelfit-smart-shop.svg';

            $('.hero-img-one').attr('src', eval('img'+randNum));
            $('.hero-img-two').attr('src', eval('imgtwo'+randNum));
        });

        const button = document.querySelector('#menu-button');
        const menu = document.querySelector('#menu');


        button.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        });

    
</script>

</body>
</html>
