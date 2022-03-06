@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="relative">
            <div class="mx-4 lg:w-full lg:mx-auto relative">
                <div class="max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                    <div class="overflow-auto">
                        <div class="flex bg-blue-500 mb-4 rounded-lg ">
                            <div class="w-3/4 m-auto inline-block py-3">
                                <div class="uppercase text-sm text-center self-center text-white">
                                    Cambia tu contraseña. Cualquier duda, ¡contactános!
                                </div>
                            </div>
                        </div>
                    
                        @if($errors->any())
                            <div class="flex bg-red-500 mb-4 rounded-lg ">
                                <div class="w-3/4 m-auto inline-block py-3">
                                    <div class="uppercase text-sm text-center self-center text-white">
                                        ¡Contraseña incorrecta! 
                                        Revisa que cumple con 8 caracteres como mínimo y que ambos campos contengan la misma contraseña.
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="flex bg-teal-400 mb-4 rounded-lg ">
                                <div class="w-3/4 m-auto inline-block py-3">
                                    <div class="uppercase text-sm text-center self-center text-white">
                                        La contraseña debe ser mínimo de 8 caracteres.
                                    </div>
                                </div>
                            </div>
                        @endif

                        <form action="{{ route('update-password') }}" class="svelfit-form" method="POST">
                            @csrf
                            @method('PUT')
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-3 md:mx-7">
                                <div>
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Contraseña</label>
                                    <input minlength="8" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300" type="password" name="password" placeholder="Contraseña"  />
                                </div>
                    
                                <div>
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Confirmar contraseña</label>
                                    <input minlength="8" class="w-full px-4 py-2 mt-2 border rounded-md focus:outline-none focus:ring-1 focus:ring-blue-300" type="password" name="confirm_password" placeholder="Confirmar contraseña"/>
                                </div>
                            </div>
                    
                            
                    
                            <div class='flex items-center justify-end md:gap-8 gap-4 pt-10 pb-5 mt-5 mx-3 md:mx-7'>
                                <button class='bg-blue-400 text-white font-medium hover:bg-blue-300 text-md uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150'>Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection