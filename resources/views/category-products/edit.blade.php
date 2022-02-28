@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Editar categoría'])

    <form action="{{ route('category-products.update', $category->id) }}" method="POST" class="svelfit-form"   enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
            <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="name" placeholder="Nombre" value="{{ $category->name }}"  />
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-6">Portada actual</label>
                <img class="w-52 object-cover mt-3" src="{{url('/category-products/'.$category->cover)}}" alt="">
            </div>

            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Portada</label>
                <input class="w-full px-4 py-2 mt-2" type="file" name="cover" placeholder="Portada"  />
            </div>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-10 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
        </div>
        
    </form>

@endsection