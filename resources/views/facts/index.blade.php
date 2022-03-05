@extends('layouts.app')

@section('content')
    <div class="w-full md:px-0">
        <div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 flex justify-between">
            <span>Datos rápidos del antropométrico</span>
        </div>
        
        <div class="grid grid-cols-1">        
            <div class="grid">
                <div class="card inline-block overflow-hidden">
                    <div class="card__copy">
                        @if (!isset($facts)) 
                            <div class="card__body text-base pb-2">
                                <label class="block uppercase text-center md:text-sm text-xs text-light font-semibold text-gray-700 mb-6 mt-6">No hay datos del antropométrico para mostar en el panel de usuario.</label>

                                <a href="{{ route('facts.create') }}" class="bg-teal-400 text-white text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right">Nuevos datos</a>
                            </div>
                        @else
                            <div class="card__body text-base pb-2">
                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Peso: </label>
                                <span class="block mb-3">{{ $facts->weight }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Grasa: </label>
                                <span class="block mb-3">{{ $facts->average_fat }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Músculo: </label>
                                <span class="block mb-3">{{ $facts->muscle }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Edad metabólica: </label>
                                <span class="block mb-3">{{ $facts->metabolic_age }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Cintura: </label>
                                <span class="block mb-3">{{ $facts->waist }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Muslo: </label>
                                <span class="block mb-3">{{ $facts->thigh }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Cadera: </label>
                                <span class="block mb-3">{{ $facts->hips }}</span>

                                <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Biceps: </label>
                                <span class="block mb-3">{{ $facts->biceps }}</span>
                            
                            </div>

                            <a href="{{ route('facts.edit', $facts->id) }}" class="bg-teal-400 text-white text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 float-right">Editar datos</a>
                        @endif
                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection