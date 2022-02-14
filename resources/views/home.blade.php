@extends('layouts.app')

@section('content')
    @if (Auth::user()->role == 'admin')
        <div class="w-full  mb-12 xl:mb-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Top 5 de pacientes con <span class="bold text-teal-400">mejor porcentaje de grasa</span> en {{ now()->isoFormat('MMMM-Y')}}</h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <div id="top_fat" style="height: 300px;"></div>

                    <script>
                        const topFatChart = new Chartisan({
                            el: '#top_fat',
                            url: "@chart('chart_route_top_fat')",
                            hooks: new ChartisanHooks()
                                .legend()
                                .colors(['#CE7BB0'])
                                .tooltip()
                                .datasets([{ type: 'line'}]),
                        });
                    </script>
                </div>
            </div>
    
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Top 5 de pacientes con <span class="bold text-teal-400">mejor masa muscular</span> en {{ now()->isoFormat('MMMM-Y')}}</h3>
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-x-auto">
                    <div id="top_muscle" style="height: 300px;"></div>

                    <script>
                        const topMuscleChart = new Chartisan({
                            el: '#top_muscle',
                            url: "@chart('chart_route_top_muscle')",
                            hooks: new ChartisanHooks()
                                .legend()
                                .colors(['#6867AC'])
                                .tooltip()
                                .datasets([{ type: 'line'}]),
                        });
                    </script>
                </div>
            </div>
        </div>
    @else
        <div class="w-full">
            <div class="md:px-20 px-3 pb-20 bg-teal-200">
                <img src="{{URL::asset('/img/svelfit-happy-news.svg')}}" class="w-3/4 m-auto" alt="">
                <h1 class="font-bold pt-6 text-4xl">¡Lo estás haciendo increible!</h1>
                <span class="block pt-6">Revisa tu progreso y sigue motivándote</span>

                <a href="" class="mt-6 p-2 block text-white bg-pink-400 ease-linear transition-all duration-150 rounded outline-none focus:outline-none w-fit">¡Quiero ver!</a>
            </div>

            <div class="container mx-auto">
                <div class="grid grid-cols-2 lg:grid-cols-4">
                    <div class="flex flex-col p-6 bg-blue-100 relative">
                        <svg class="absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#3B82F6" fill-opacity="0.8" d="M0,288L48,256C96,224,192,160,288,117.3C384,75,480,53,576,85.3C672,117,768,203,864,229.3C960,256,1056,224,1152,181.3C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                        <p class="text-blue-500 font-bold text-xs uppercase">Peso</p>
                        <img src="{{URL::asset('/img/weight.svg')}}" class="w-2/5 md:w-1/4 mt-4" alt="">
                        <p class="block mt-4 z-10">
                            <span class="text-3xl font-bold">82</span>kg
                        </p>
                    </div>
                    <div class="flex flex-col p-6 bg-yellow-100 relative">
                        <svg class="absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#EAB308" fill-opacity="0.8" d="M0,128L48,128C96,128,192,128,288,117.3C384,107,480,85,576,101.3C672,117,768,171,864,202.7C960,235,1056,245,1152,213.3C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                        <p class="text-yellow-500 font-bold text-xs uppercase">Grasa</p>
                        <img src="{{URL::asset('/img/fat.svg')}}" class="w-2/5 md:w-1/4 mt-4" alt="">
                        <p class="block mt-4 z-10">
                            <span class="text-3xl font-bold">82</span>%
                        </p>
                    </div>
                    <div class="flex flex-col p-6 bg-purple-100 relative">
                        <svg class="absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#A855F7" fill-opacity="0.8" d="M0,288L48,256C96,224,192,160,288,117.3C384,75,480,53,576,85.3C672,117,768,203,864,229.3C960,256,1056,224,1152,181.3C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                        <p class="text-purple-500 font-bold text-xs uppercase">Grasa visceral</p>
                        <img src="{{URL::asset('/img/heart-beat.svg')}}" class="w-2/5 md:w-1/4 mt-4" alt="">
                        <p class="block mt-4 z-10">
                            <span class="text-3xl font-bold">12</span>%
                        </p>
                    </div>
                    <div class="flex flex-col p-6 bg-green-100 relative">
                        <svg class="absolute bottom-0 left-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                            <path fill="#22C55E" fill-opacity="0.8" d="M0,128L48,128C96,128,192,128,288,117.3C384,107,480,85,576,101.3C672,117,768,171,864,202.7C960,235,1056,245,1152,213.3C1248,181,1344,107,1392,69.3L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
                        </svg>
                        <p class="text-green-500 font-bold text-xs uppercase">Músculo</p>
                        <img src="{{URL::asset('/img/muscle.svg')}}" class="w-2/5 md:w-1/4 mt-4" alt="">
                        <p class="block mt-4 z-10">
                            <span class="text-3xl font-bold">30</span>kg
                        </p>
                    </div>
                </div>
            </div>
        </div> 
    @endif
@endsection
