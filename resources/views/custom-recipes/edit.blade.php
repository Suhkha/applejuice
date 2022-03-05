@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => $recipe->title ])

    <form action="{{ route('custom-recipes.update', $customRecipe->id) }}" class="svelfit-form"   method="POST">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Ingredientes y porciones personalizados</label>
        </div>
        <div class="grid grid-cols-1 mx-3 md:mx-7">
            @foreach ($ingredients as $item)
                <input type="hidden"name="ingredients_id[]" value="{{ $item->id }}"/>
                <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="ingredients[]" placeholder="Ingrediente" value="{{ $item->ingredients }}"/>
            @endforeach
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">¿Necesitas más ingredientes?</label>
        </div>
        <div id="list">
            <div class="list_var">
                <div class="grid grid-cols-1 mx-3 md:mx-7">
                    <input type="text" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  data-name-format="list-ingredients_%d" name="list_ingredients[]" placeholder="Detalles"/>
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
            <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Comentarios" value={{ $customRecipe->comments }}>{{ $customRecipe->comments }}</textarea>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Activo</label>
            <select name="status" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  >
                <option value="{{ $customRecipe->status }}">{{ $customRecipe->status == 0 ? 'No activo' : 'Activo' }}</option>
                <option value="0">No</option>
                <option value="1">Sí</option>
            </select>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>

        <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
            <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
        </div>
    </form>
@endsection