@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Editar producto'])

    <form action="{{ route('products.update', $product->id) }}" method="POST" class="svelfit-form" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
            <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="name" placeholder="Nombre" value="{{ $product->name }}"  />
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Categoría</label>
            <select name="category_id" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  >
                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-6">Imagen actual</label>
                <img class="w-52 object-cover mt-3" src="{{url('/products/'.$product->image)}}" alt="">
            </div>

            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Imagen del producto</label>
                <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="file" name="image" placeholder="Imagen del producto"/>
            </div>
        </div>

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
            <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Comentarios" value="{{ $product->comments }}">{{ $product->comments }}</textarea>
        </div>

        <style>
            .toggle-checkbox:checked {
                @apply: right-0 border-teal-400;
                right: 0;
                border-color: #2dd4bf;
            }
            .toggle-checkbox:checked + .toggle-label {
                @apply: bg-teal-400;
                background-color: #2dd4bf;
            }
        </style>

        <div class='flex items-center justify-end pt-10 pb-3 mt-5 mx-3 md:mx-7'>
            <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                <input type="checkbox" name="favorite" id="toggle" {{ $product->favorite == 1 ? 'checked' : '' }} class="toggle-checkbox absolute block w-6 h-6 rounded-full bg-white border-4 appearance-none cursor-pointer"/>
                <label for="toggle" class="toggle-label block overflow-hidden h-6 rounded-full bg-gray-300 cursor-pointer"></label>
            </div>
            <label for="toggle" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Mostrar en favoritos</label>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
        </div>

        <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
            <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
        </div>
        
    </form>

@endsection