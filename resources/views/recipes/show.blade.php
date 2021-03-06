@extends('layouts.app')

@section('content')
    <div class="w-full md:px-0">
        <div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 flex justify-between">
            <span>{{ $recipe->title }}</span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5">
            <div class="col-span-2 md:col-span-1 md:grid">
                @if ($recipe->video_id != "")
                    <iframe class="w-full rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/{{ $recipe->video_id }}" title="{{ $recipe->title }}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                @else
                    <img class="object-cover rounded-lg" src="{{url('/recipes/'.$recipe->image)}}" alt="">
                @endif
            </div>

            <div class="col-span-2 md:col-span-1 md:grid">
                <div class="card inline-block overflow-hidden">
                    <div class="card__copy pb-5">
                        <div class="card__body text-base pb-2">
                            @if ($recipe->difficulty)
                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Dificultad: </label>
                                <span class="block mb-3">{{ $recipe->difficulty }}</span>
                            @endif

                            @if ($recipe->time)
                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Tiempo de preparación: </label>
                                <span class="block mb-3">{{ $recipe->time }}</span>
                            @endif

                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Ingredientes: </label>
                            <span class="block mb-3 recipes">{!! $recipe->ingredients !!}</span>
                        
                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Preparación: </label>
                            <span class="block mb-3 recipes">{!! $recipe->preparation !!}</span>
                        </div>

                        <a href="{{ route('recipes.edit', $recipe->id) }}" class="bg-teal-400 text-white text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 inline-block">Editar receta</a>
                    </div>
                    <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
                        <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection