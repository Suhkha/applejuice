@extends('layouts.app')

@section('content')
    <div class="w-3/4">
        <div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 flex justify-between">
            <span>{{ $product->name }}</span>

            <a href="{{ route('products.edit', $product->id) }}" class="bg-white text-teal-400 text-xs font-bold uppercase px-6 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Editar producto</a>
        </div>
        <img class="w-52 object-cover mt-3" src="{{url('/products/'.$product->image)}}" alt="">

        <div class="col-span-2 tabs-section">
            <div class="grid grid-cols-1">
                <div class="card inline-block overflow-hidden">
                    <div class="card__copy space-y-4 py-8">
                        <div class="card__body text-base pb-2">
                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Categoría: </label>
                            <span class="block mb-3">{{ $product->category->name }}</span>

                            <label class="block uppercase md:text-sm text-xs text-light font-semibold text-gray-700">Comentarios: </label>
                            <span class="block mb-3 recipes">{!! $product->comments !!}</span>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </div>
@endsection