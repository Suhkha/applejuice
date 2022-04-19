@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => $recipe->title ])

    <form action="{{ route('custom-recipes.update', $customRecipe->id) }}" class="svelfit-form"   method="POST">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">

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