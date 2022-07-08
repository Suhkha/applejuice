@extends('layouts.app')

@section('content')
    <section class="relative pt-12 bg-blueGray-50">
        <div class="items-center flex flex-wrap">
            <div class="w-full md:w-1/2 ml-auto mr-auto px-4">
                <img alt="..." class="max-w-full rounded-lg shadow-lg" src="{{URL::asset('/img/svelfit-kariana-nutriologa.jpeg')}}">
            </div>

            <div class="w-full md:w-5/12 ml-auto mr-auto px-4">
                <div class="md:pr-12">
                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-teal-300 mt-8">
                        <i class="fas fa-heart text-xl"></i>
                    </div>
                    <p class="mt-2 text-2xl font-extrabold  leading-relaxed text-blueGray-500">
                        "¡Si te sientes bien, te ves bien!" 
                    </p>
                    <p class="mt-4 text-lg leading-relaxed text-blueGray-500">
                        En este portal podrás encontrar información sobre:
                    </p>
                    <ul class="list-none mt-6">
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-teal-400 mr-3"><i class="fas fa-medal"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-blueGray-500">
                                        Tus progresos
                                    </h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-teal-400 mr-3"><i class="fa fa-weight"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-blueGray-500">Planes de alimentación</h4>
                                </div>
                            </div>
                        </li>
                        <li class="py-2">
                            <div class="flex items-center">
                                <div>
                                    <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded-full text-white bg-teal-400 mr-3"><i class="fa fa-apple-alt"></i></span>
                                </div>
                                <div>
                                    <h4 class="text-blueGray-500">¡Recomendaciones y más!</h4>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection