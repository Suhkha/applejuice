@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="mx-4 lg:m-auto lg:w-full">
            <!-- Anthropometric items -->
            <div class="plans-wrapper tabs-section relative max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                <ul data-tabs class="plans h-24 box-border whitespace-nowrap overflow-x-auto overflow-y-hidden flex flex-nowrap">
                    <li>
                        <a class="item cursor-pointer active flex bg-gradient-to-tl from-orange-500 to-pink-600 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#recipes" data-tabby-default>
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-chopsticks text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Recetas</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-tl from-orange-500 to-pink-600 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#recomendations">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-check text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Recomendaciones</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-tl from-orange-500 to-pink-600 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#plans">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-file-clipboard-file---text text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Planes</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--plans-->
        <div class="relative">
            <div class="mx-4 lg:w-full lg:mx-auto relative">
                <div class="max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                    @include('panel.custom-plan.recipes')
                    @include('panel.custom-plan.pdf')
                </div>
            </div>
        </div>
    </div>
@endsection