@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Nuevo antecedente'])

    <form action="{{ route('background.store') }}" method="POST" class="svelfit-form"  >
        @csrf
        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
            <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="name" placeholder="Nombre"  />
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Detalles</label>
            <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="details" placeholder="Detalles"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Tipo de antecedente</label>
                <select name="type" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  >
                    <option value="">Selecciona</option>
                    <option value="0">Patológico</option>
                    <option value="1">No patológico</option>
                    <option value="2">Heredo familiar</option>
                </select>
            </div>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>

        <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
            <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
        </div>
    </form>

@endsection