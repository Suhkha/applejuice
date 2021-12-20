@extends('layouts.app')

@section('content')
    @include('partials.hero-form', ['sectionTitle' => 'Antecedentes ginecológicos'])

    <form action="{{ route('gynecological-history.store') }}" method="POST" class="form-serialize">
        @csrf
        <input type="hidden" name="user_id" value="{{ $user_id }}">
        <div>
            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Menarca</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="menarche" placeholder="Menarca" />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="menarche_comments" placeholder="Comentarios"></textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Embarazos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="pregnancies" placeholder="Embarazos" />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="pregnancies_comments" placeholder="Comentarios"></textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Abortos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="abortion" placeholder="Abortos" />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="abortion_comments" placeholder="Comentarios"></textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Menstruación</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="menstruation" placeholder="Menstruación" />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="menstruation_comments" placeholder="Comentarios"></textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Método anticonceptivo</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="contraceptive_method" placeholder="Método anticonceptivo" />
                </div>

                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Comentarios</label>
                    <textarea class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" name="contraceptive_method_comments" placeholder="Comentarios"></textarea>
                </div>
            </div>

            <div>
                <div class="grid grid-cols-1 mt-5 mx-7">
                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Productos</label>
                    <input class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-teal-300" type="text" name="medicines" placeholder="Productos" />
                </div>
            </div>
        </div>

        <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-10 mt-5 mx-7'>
            <button class='bg-teal-400 text-white font-medium hover:bg-teal-300 text-md uppercase px-6 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Guardar</button>
        </div>
        
    </form>

@endsection