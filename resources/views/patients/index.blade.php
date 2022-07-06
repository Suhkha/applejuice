@extends('layouts.app')

@section('content')
    {{-- <section class="py-1 bg-blueGray-50"> --}}
        <div class="w-full  mb-12 xl:mb-0">
            <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-blueGray-700">Pacientes</h3>
                        </div>
                        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1 text-right">
                            <a href="{{ route('patients.create') }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Nuevo paciente</a>
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
                                    Próxima cita
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Consultorio
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Agendar
                                </th>
                                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 
                                py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Nuevo
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
                            @foreach ($users as $user)
                                @if($user->patient != null) 
                                    <tr>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                            {{ $user->name }} {{ $user->last_name }} {{ $user->second_last_name }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 ">
                                            {{ !isset($user->agenda->full_date) ? 'Sin fecha' : date('d/m/Y H:i:s', strtotime($user->agenda->full_date)) }}
                                        </td>
                                        <td class="border-t-0 px-6 align-center border-l-0 border-r-0 whitespace-nowrap p-4">
                                            {{!isset($user->agenda->location) ? 'Sin ubicación' : $user->agenda->location }}
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <a href="{{ route('agenda', $user->user_id) }}" class="bg-blue-400 text-white hover:bg-blue-300 text-xs font-bold uppercase px-3 py-1 inline-block text-center rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Agendar</a>
                                            <br>
                                            @if(isset($user->agenda->full_date))
                                                <a href="#" data-delete="{{ route('cancel-appointment', $user->user_id) }}" data-toggle="tooltip" data-placement="top" title="Cancelar cita" class="cancel-appointment bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 inline-block text-center rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Cancelar</a>
                                            @endif
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <a href="{{ route('anthropometric', ['user_id' => $user->user_id, 'type' => 'profile']) }}" class="bg-gradient-to-r from-orange-500 to-pink-500 hover:from-pink-500 hover:to-orange-500 text-white text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Nuevo historial</a>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                            <a href="{{ route('profile.show', $user->id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Ver</a>
                                        </td>
                                        <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                            <a href="#" data-delete="{{ route('delete-user', $user->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar registro" class="delete-item bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Eliminar</a>
                                        </td>
                                    </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    {{-- <</section> --}}
@endsection