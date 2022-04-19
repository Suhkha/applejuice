@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="rounded-t px-4 py-3 border-0 bg-teal-400">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-base text-white">Plan de alimentación de {{ $name }}</h3>
                </div>
            </div>
        </div>
        <form action="{{ route('pdf.store', $userId) }}" method="post" enctype="multipart/form-data" id="pdf-upload" class="dropzone bg-teal-100 px-9 py-9 w-full h-fit text-center border-dotted border-2 border-teal-400">
            @csrf
            <div>
                <span class="text-gray-800 block mb-4">Arrastra el plan de alimentación (PDF) al recuadro o da clic al botón</h3>
            </div>
        </form>

        <a href="{{ route('profile.show', $id) }}" class="text-teal-400 mt-4">Regresar al perfil</a>
    </div>
@endsection