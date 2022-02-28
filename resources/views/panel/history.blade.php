@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="mx-4 lg:m-auto lg:w-full">
            <!-- Anthropometric items -->
            <div class="details-wrapper tabs-section relative max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                <ul data-tabs class="details h-24 box-border whitespace-nowrap overflow-x-auto overflow-y-hidden flex flex-nowrap">
                    <li>
                        <a class="item cursor-pointer active flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#profile" data-tabby-default>
                            <div class="self-center m-auto text-center">
                                <i class="icon-Profile text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Perfil</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#weight">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-footprint-2 text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Peso</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#average_fat">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Cardiovascular text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Grasa</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#muscle_mass_kilo">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-weight-lift text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Músculo</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#metabolic_age">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-clock-back text-3xl text-white block"></i>
                                <span class="text-xxs leading-4 text-white lg:text-sm block m-auto whitespace-normal mt-2">Edad metabólica</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#waist">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Aerobics-2 text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Cintura</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#thigh">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Leg-2 text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Muslo</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#hips">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Aerobics-3 text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Cadera</span>
                            </div>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-gradient-to-r from-orange-500 to-pink-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#biceps">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Bodybuilding text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Biceps</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--details-->
        <div class="relative">
            <div class="mx-4 lg:w-full lg:mx-auto relative">
                @include('panel.anthropometric.profile')
                @include('panel.anthropometric.weight')
                @include('panel.anthropometric.fat')
                @include('panel.anthropometric.muscle')
                @include('panel.anthropometric.metabolic_age')
                @include('panel.anthropometric.waist')
                @include('panel.anthropometric.thigh')
                @include('panel.anthropometric.hips')
                @include('panel.anthropometric.biceps')
            </div>
        </div>
    </div>
@endsection