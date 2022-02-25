@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="mx-4 lg:m-auto lg:w-3/6">
            <!-- Anthropometric items -->
            <div class="details-wrapper tabs-section relative max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                <ul data-tabs class="details h-24 box-border whitespace-nowrap overflow-x-auto overflow-y-hidden flex flex-nowrap">
                    <li>
                        <a class="item cursor-pointer active flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#profile" data-tabby-default>
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Perfil</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#weight">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Peso</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#average_fat">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Grasa</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#muscle_mass_kilo">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Músculo</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#muscle_quality">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Calidad del músculo</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#bone_mass">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Masa ósea</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#visceral">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Grasa visceral</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#imc">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">IMC</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#water">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Agua</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#metabolic_age">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Edad metabólica</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#waist">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Cintura</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#thigh">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Muslo</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#hips">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Cadera</span>
                        </a>
                    </li>

                    <li>
                        <a class="item cursor-pointer flex bg-teal-800 rounded-lg mx-1 p-4 box-border border-2 border-transparent relative" href="#biceps">
                            <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Bicep</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!--details-->
        <div class="relative">
            <div class="mx-4 lg:w-3/6 lg:mx-auto relative">
                @include('panel.anthropometric.profile')
                @include('panel.anthropometric.weight')
                @include('panel.anthropometric.fat')
                @include('panel.anthropometric.muscle')
                @include('panel.anthropometric.muscle_quality')
                @include('panel.anthropometric.bone_mass')
                @include('panel.anthropometric.visceral')
                @include('panel.anthropometric.imc')
                @include('panel.anthropometric.water')
                @include('panel.anthropometric.metabolic_age')
                @include('panel.anthropometric.waist')
                @include('panel.anthropometric.thigh')
                @include('panel.anthropometric.hips')
                @include('panel.anthropometric.biceps')
            </div>
        </div>
    </div>
@endsection