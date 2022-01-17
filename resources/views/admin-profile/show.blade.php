@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
        <div class="grid grid-cols-1">
            @include('partials.admin-patient-profile.gallery')
        </div>
        
        <div class="grid grid-cols-1">
            @include('partials.admin-patient-profile.personal-data')
        </div>

        <div class="col-span-2 tabs-section">
            <ul data-tabs class="flex mb-12 flex-wrap">
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" data-tabby-default href="#anthropometric">Antropométrico</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#background">Antecedentes</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#hereditary">Antecedentes Familiares</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#medicines">Medicamentos</a></li>
                @if ($gynecological)
                    <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#gynecological-history">Ginecologicos</a></li>
                @endif
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#goals">Objetivos</a></li>
                @if ($treatment)
                    <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#treatment">Tratamiento</a></li>
                @endif
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block mb-3" href="#plans">Planes (PDF)</a></li>
            </ul>
            
            <div id="anthropometric">
                @include('partials.admin-patient-profile.anthropometric')
            </div>
            <div id="background">
                @include('partials.admin-patient-profile.background')
            </div>
             <div id="hereditary">
                @include('partials.admin-patient-profile.hereditary')
            </div>
            <div id="medicines">
                @include('partials.admin-patient-profile.medicines')
            </div>
            @if ($gynecological)
                <div id="gynecological-history">
                    @include('partials.admin-patient-profile.gynecological-history')
                </div>
            @endif

            <div id="goals">
                @include('partials.admin-patient-profile.goals')
            </div>

            @if ($treatment)
                <div id="treatment">
                    @include('partials.admin-patient-profile.treatment')
                </div>
            @endif
            
            <div id="plans">
                @include('partials.admin-patient-profile.plans')
            </div>
        </div>
    </div>
@endsection