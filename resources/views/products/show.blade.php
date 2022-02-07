@extends('layouts.app')

@section('content')
    <div class="w-full md:px-0">
        <div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 flex justify-between">
            <span>{{ $product->name }}</span>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5">
            <div class="col-span-2 md:col-span-1 md:grid">
                <img class="w-full object-cover mt-3" src="{{url('/products/'.$product->image)}}" alt="">
            </div>
            
            <div class="col-span-2 md:col-span-1 md:grid">
                <div class="card inline-block overflow-hidden">
                    <div class="card__copy">
                        <div class="card__body text-base pb-2">
                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Categoría: </label>
                            <span class="block mb-3">{{ $product->category->name }}</span>

                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Comentarios: </label>
                            <span class="block mb-3 recipes">{!! $product->comments !!}</span>
                        </div>

                        <a href="{{ route('products.edit', $product->id) }}" class="bg-teal-400 text-white text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Editar producto</a>

                    </div>
                </div> 
            </div>
        </div>
    </div>
@endsection