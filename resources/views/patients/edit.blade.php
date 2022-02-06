@extends('layouts.app')

@section('content')

    @include('partials.hero-form', ['sectionTitle' => 'Editar paciente'])
    
    <form action="{{ route('patients.update', $userDetail->id) }}" method="POST" class="svelfit-form" data-parsley-validate="">
        @csrf
        @method('PUT')

        <div class="grid grid-cols-1 mt-5 mx-7">
            <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nombre</label>
            <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="name" placeholder="Nombre" value="{{ $userDetail->name }}" required/>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Apellido paterno</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="last_name" placeholder="Apellido paterno" value="{{ $userDetail->last_name }}" required/>
            </div>
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Apellido materno</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="second_last_name" placeholder="Apellido materno" value="{{ $userDetail->second_last_name }}" required/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Edad</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="age" placeholder="Edad" value="{{ $userDetail->age }}" required/>
            </div>

            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Fecha de nacimiento</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="date" name="birthday" placeholder="Fecha de nacimiento" value="{{ $userDetail->birthday }}" required/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Nivel educativo</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="education_level" placeholder="Nivel educativo" value="{{ $userDetail->education_level }}" required/>
            </div>

            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Religión</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="religion" placeholder="Religión" value="{{ $userDetail->religion }}"/>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
            <div class="grid grid-cols-1">
                <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Trabajo actual</label>
                <input class="w-full px-4 py-2 mt-2 border border-teal-200 rounded-md focus:outline-none focus:ring-1 focus:ring-teal-400" type="text" name="job_position" placeholder="Trabajo actual" value="{{ $userDetail->job_position }}" required/>
            </div>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-10 mt-5 mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase px-6 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
        </div>
    </form>

@endsection