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
            <ul data-tabs class="flex mb-12 ">
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block" data-tabby-default href="#anthropometric">Antropométrico</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block" href="#background">Antecedentes</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block" href="#medicines">Medicamentos</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block" href="#gynecological-history">Ginecologicos</a></li>
                <li><a class="bg-gray-400 text-white px-4 py-4 mx-1 block" href="#goals">Objetivos</a></li>
            </ul>
            
            <div id="anthropometric">
                @include('partials.admin-patient-profile.anthropometric')
            </div>
            <div id="background">
                @include('partials.admin-patient-profile.background')
            </div>
            <div id="medicines">
                @include('partials.admin-patient-profile.medicines')
            </div>
            <div id="gynecological-history">
                @include('partials.admin-patient-profile.gynecological-history')
            </div>
            <div id="goals">
                @include('partials.admin-patient-profile.goals')
            </div>
        </div>
    </div>
@endsection