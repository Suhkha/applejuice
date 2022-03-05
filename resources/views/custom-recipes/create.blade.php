@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Receta personalizada'])

    <form action="{{ route('custom-recipes.store') }}" class="svelfit-form"   method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="type" value="{{ $type }}">

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Selecciona la receta</label>
            <select name="recipe" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" required>
                <option value="">Selecciona</option>
                @foreach ($recipes as $recipe)
                    <option value="{{ $recipe->id }}">{{ $recipe->title }}</option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Ingredientes y porciones personalizados</label>
        </div>
        <div id="list">
            <div class="list_var">
                <div class="grid grid-cols-1 mx-3 md:mx-7">
                    <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  data-name-format="list-ingredients_%d" name="ingredients[]" placeholder="Detalles"/>
                </div>
                <div class='flex items-center justify-end pb-5 pt-3 mx-7'>
                    <button class="bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 list_del">Eliminar</button>
                </div>
            </div>
        </div>
        
        <div class='flex items-center justify-start pt-5 pb-3 mx-7'>
            <input value="Añadir ingrediente" type="button" class="bg-blue-400 text-white font-medium hover:bg-blue-300 text-xs uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 cursor-pointer list_add">
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
            <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Comentarios"></textarea>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>

        <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
            <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
        </div>
    </form>
@endsection