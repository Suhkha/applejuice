@extends('layouts.app')

@section('content')
    {{-- <section class="py-1 bg-blueGray-50"> --}}
        <div class="w-full  mb-12 xl:mb-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Recetas</h3>
                        </div>
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('recipes.create') }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Nueva receta</a>
                        </div>
                    </div>
                </div>
                
                <div class="block w-full overflow-x-auto">
                    <table class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Nombre
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Fecha de subida
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 
                                py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Ver
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Eliminar
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($recipes as $recipe)
                                <tr>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                        {{ $recipe->title }}
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                        {{ $recipe->created_at->isoFormat('DD-MMMM-Y') }}
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                        <a href="{{ route('recipes.show', $recipe->id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Ver receta</a>
                                    </td>
                                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                        <a href="#" data-delete="{{ route('delete-recipe', $recipe->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar registro" class="delete-item bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150" type="button">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {{-- <</section> --}}
@endsection