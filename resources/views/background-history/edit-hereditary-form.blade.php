@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Editar antecedente heredo familiares'])

    <form action="{{ route('update-hereditary', $hereditary->id) }}" method="POST" class="svelfit-form"  >
        @csrf

        <input type="hidden" name="profile_id" value="{{ $profile_id }}">
        <input type="hidden" name="no-pathologic-form" value="true">
        <div>
            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Antecedentes heredo familiares</label>
                    <select name="background_id" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300"  >
                        <option value="{{ $hereditary->hereditary[0]->id }}">{{ $hereditary->hereditary[0]->name }}</option>
                        @foreach ($pathologics as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios del antecedente del paciente</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="comments" placeholder="Detalles" value="{{ $hereditary->comments }}">{{ $hereditary->comments }}</textarea>
                </div>
            </div>
        </div>
        
        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
        </div>
        
        <div class='flex items-center justify-end pb-10 mx-3 md:mx-7'>
            <a href="{{ url()->previous() }}" class='text-teal-400'> < Regresar</a>
        </div>

    </form>

@endsection