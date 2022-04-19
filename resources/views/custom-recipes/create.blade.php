@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Receta personalizada'])

    <form action="{{ route('custom-recipes.store') }}" class="svelfit-form"   method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="type" value="{{ $type }}">

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Selecciona la receta</label>
            <style>
                .recipe-checkbox:checked {
                    @apply: right-0 border-teal-400;
                    right: 0;
                    border-color: #2dd4bf;
                }
                .recipe-checkbox:checked + .recipe-label {
                    @apply: bg-teal-400;
                    background-color: #2dd4bf;
                }
            </style>
            @foreach ($recipes as $recipe)
            <div class="flex items-center mt-4">
                <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                    <input type="checkbox" name="recipes[]" id="recipe-{{ $recipe->id }}" class="recipe-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer" value="{{ $recipe->id }}"/>
                    <label for="recipe-{{ $recipe->id }}" class="recipe-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
                </div>
                <label for="recipe-{{ $recipe->id }}" class=" inline-block md:text-sm text-xs text-light font-semibold">{{ $recipe->title }}</label>
            </div>
            @endforeach
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