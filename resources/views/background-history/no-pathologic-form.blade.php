@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Antecedentes no patológicos'])

    <form action="{{ route('history.store') }}" class="svelfit-form" data-parsley-validate="" method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="no-pathologic-form" value="true">
        <input type="hidden" name="type" value="{{ $type }}">

        <div id="list">
            <div class="list_var">
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Antecedentes no patológicos disponibles</label>
                    <select data-name-format="list-background_%d" name="" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" required>
                        <option value="">Selecciona</option>
                        @foreach ($noPathologics as $noPathologic)
                            <option value="{{ $noPathologic->id }}">{{ $noPathologic->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios del antecedente del paciente</label>
                    {{-- unstyled --}}
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  data-name-format="list-comments_%d" name="comments[]" placeholder="Detalles"></textarea>
                </div>
                <div class='flex items-center justify-end pt-10 mx-7'>
                    <button class="bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 list_del">Eliminar</button>
                </div>
            </div>
        </div>
        
        <div class='flex items-center justify-start pt-10 mx-7'>
            <input type="button" value="Añadir" class="bg-blue-400 text-white font-medium hover:bg-blue-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 list_add">
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-10 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>
        
    </form>

@endsection