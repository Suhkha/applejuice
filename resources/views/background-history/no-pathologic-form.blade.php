@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Antecedentes no patológicos'])

    <form action="{{ route('history.store') }}" class="svelfit-form"   method="POST">
        @csrf
        
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <input type="hidden" name="no-pathologic-form" value="true">
        <input type="hidden" name="type" value="{{ $type }}">

        @foreach ($noPathologics as $noPathologic)
            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <input type="hidden" name="pathologicIDS[]" value="{{ $noPathologic->id }}">
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold"><span class="font-bold underline text-teal-500">{{ $noPathologic->name }}</span> </label>
                    {{-- unstyled --}}
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments[]" placeholder="Comentarios"></textarea>
                </div>
            </div>
        @endforeach

        <div class="grid grid-cols-1 mt-10 mx-3 md:mx-7">
            <h3 class="font-semibold text-base">¿Quieres añadir nuevo antecedente?</h3>
            <label class="italic md:text-sm text-xs text-gray-500 text-light font-semibold">Esta sección puede ir vacía en caso de no ser necesitada.</label>
        </div>
        <div id="list">
            <div class="list_var">
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre del antecedente patologico</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" data-name-format="list-name_%d" name="name[]" placeholder="Nombre"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios sobre el antecedente del paciente</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  data-name-format="list-comments_%d" name="comments[]" placeholder="Detalles"></textarea>
                </div>
                <div class='flex items-center justify-end pt-10 mx-7'>
                    <button class="bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 list_del">Eliminar</button>
                </div>
            </div>
        </div>
        <div class='flex items-center justify-start pt-10 mx-7'>
            <input type="button"  value="Añadir antecedente" class="bg-blue-400 text-white font-medium hover:bg-blue-300 text-xs uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 list_add">
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