@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 mt-5 mx-7">
        <div class="grid grid-cols-1 items-center">
            <div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 ">{{ $recipe->title }}</div>
            @if ($recipe->video_id)
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $recipe->video_id }}" title="{{ $recipe->title }}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            @endif
        </div>
        <div class="col-span-2 tabs-section">
            <div class="grid grid-cols-1">
                <div class="card inline-block overflow-hidden">
                    <div class="card__copy space-y-4 py-8">
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
                
                        <div class="relative w-full px-4 max-w-full flex-1 text-right">
                            <a href="{{ route('recipes.edit', $recipe->id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase px-6 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">Editar receta</a>
                        </div>
                    </div>
                </div>
                        
                            
                
                            
            </div>
        </div>
    </div>
@endsection