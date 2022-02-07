@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Editar medicamento'])

    <form action="{{ route('medicines.update', $medicine->id) }}" method="POST" class="svelfit-form" data-parsley-validate="">
        @csrf
        @method('PUT')
        
        <input type="hidden" name="profile_id" value="{{ $profile_id }}">
        <div>
            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre del medicamento</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="name" placeholder="Nombre" value="{{ $medicine->name}}" required/>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios sobre el medicamento</label>
                    {{-- unstyled --}}
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Detalles" value="{{ $medicine->comments }}">{{ $medicine->comments }}</textarea>
                </div>
            </div>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-10 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
        </div>
        
    </form>

@endsection