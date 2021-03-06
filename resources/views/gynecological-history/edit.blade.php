@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Editar antecedentes ginecológicos'])

    <form action="{{ route('gynecological-history.update', $gynecological->id) }}" method="POST" class="svelfit-form"  >
        @csrf
        @method('PUT')
        
        <input type="hidden" name="profile_id" value="{{ $profile_id }}">
        <div>
            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Menarca</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="menarche" placeholder="Menarca" value="{{ $gynecological->menarche }}"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="menarche_comments" placeholder="Comentarios" value="{{ $gynecological->menarche_comments }}">{{ $gynecological->menarche_comments }}</textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Embarazos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="pregnancies" placeholder="Embarazos" value="{{ $gynecological->pregnacies }}"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="pregnancies_comments" placeholder="Comentarios" value="{{ $gynecological->pregnacies_comments }}">{{ $gynecological->pregnancies_comments }}</textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Abortos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="abortion" placeholder="Abortos" value="{{ $gynecological->abortion }}"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="abortion_comments" placeholder="Comentarios" value="{{ $gynecological->abortion_comments }}">{{ $gynecological->abortion_comments }}</textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Menstruación</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="menstruation" placeholder="Menstruación" value="{{ $gynecological->menstruation }}"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="menstruation_comments" placeholder="Comentarios" value="{{ $gynecological->menstruation_comments }}">{{ $gynecological->menstruation_comments }}</textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Método anticonceptivo</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="contraceptive_method" placeholder="Método anticonceptivo" value="{{ $gynecological->contraceptive_method }}"  />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="styled w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="contraceptive_method_comments" placeholder="Comentarios" value="{{ $gynecological->contraceptive_method_comments }}">{{ $gynecological->contraceptive_method_comments }}</textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-3 md:mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Productos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="medicines" placeholder="Productos" value="{{ $gynecological->medicines }}"  />
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