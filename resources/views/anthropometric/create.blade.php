@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Antropométrico'])

    <form action="{{ route('anthropometric.store') }}" method="POST" class="svelfit-form"   >
        @csrf
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="type" value="{{ $type }}">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Talla</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="size" value="{{ isset($lastAnthropometric->size) ? $lastAnthropometric->size : '' }}" placeholder="Talla"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Peso</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="weight" value="{{ isset($lastAnthropometric->weight) ? $lastAnthropometric->weight : '' }}"  placeholder="Peso"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">% Grasa</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="average_fat" value="{{ isset($lastAnthropometric->average_fat) ? $lastAnthropometric->average_fat : '' }}" placeholder="% Grasa"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Masa muscular en kg</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="muscle_mass_kilo" value="{{ isset($lastAnthropometric->muscle_mass_kilo) ? $lastAnthropometric->muscle_mass_kilo : '' }}" placeholder="Masa muscular en kg"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Calidad muscular</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="muscle_quality" value="{{ isset($lastAnthropometric->muscle_quality) ? $lastAnthropometric->muscle_quality : '' }}" placeholder="Calidad muscular"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Masa ósea en kg</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="bone_mass" value="{{ isset($lastAnthropometric->bone_mass) ? $lastAnthropometric->bone_mass : '' }}" placeholder="Masa ósea en kg"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Visceral</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="visceral" value="{{ isset($lastAnthropometric->visceral) ? $lastAnthropometric->visceral : '' }}" placeholder="Visceral"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Edad metabólica</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="metabolic_age" value="{{ isset($lastAnthropometric->metabolic_age) ? $lastAnthropometric->metabolic_age : '' }}" placeholder="Edad metabólica"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">IMC</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="imc" value="{{ isset($lastAnthropometric->imc) ? $lastAnthropometric->imc : '' }}" placeholder="IMC"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Agua</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="water" value="{{ isset($lastAnthropometric->water) ? $lastAnthropometric->water : '' }}" placeholder="Agua"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cintura</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="waist" value="{{ isset($lastAnthropometric->waist) ? $lastAnthropometric->waist : '' }}" placeholder="Cintura cm"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Muslo</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="thigh" value="{{ isset($lastAnthropometric->thigh) ? $lastAnthropometric->thigh : '' }}" placeholder="Muslo cm"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Cadera</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="hips" value="{{ isset($lastAnthropometric->hips) ? $lastAnthropometric->hips : '' }}"  placeholder="Cadera cm"/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Biceps</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="biceps" value="{{ isset($lastAnthropometric->biceps) ? $lastAnthropometric->biceps : '' }}" placeholder="Biceps cm"/>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
            <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Comentarios"></textarea>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>

        @if ($type == "profile")
            <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
                <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
            </div>
        @endif
    </form>

@endsection