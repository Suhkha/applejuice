@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1 w-full">
        <div class="relative">
            <div class="mx-4 lg:w-full lg:mx-auto relative">
                <div class="max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                    <div class="recipe overflow-auto">
                        <div class="flex">
                            <div class="w-full m-auto inline-block pb-3">
                                <div class="uppercase text-sm text-right self-center text-orange-500">
                                    <a href="{{ route('custom-plan') }}">
                                        < Regresar a recetas
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="flex mb-4">
                            <div class="w-full inline-block">
                                @if ($plan->recipe[0]->video_id != "")
                                    <iframe class="w-full rounded-lg" width="560" height="315" src="https://www.youtube.com/embed/{{ $plan->recipe[0]->video_id }}" title="{{ $plan->recipe[0]->title }}" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                @else
                                    <img class="object-cover rounded-lg" src="{{URL::asset('/img/breakfast-placeholder.jpg')}}" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="flex bg-orange-500 mb-4 rounded-lg ">
                            <div class="w-3/4 m-auto inline-block py-3">
                                <div class="uppercase text-sm text-center self-center text-white">
                                    {{ $plan->recipe[0]->title }}
                                </div>
                            </div>
                        </div>
                        <div class="flex border-b border-gray-200 mb-8">
                            <div class="w-full inline-block ml-4">
                                <div class="text-gray-500 border-b border-gray-200 pb-2 mb-4 block self-center">
                                    @if (isset($plan->recipe[0]->difficulty))
                                        <div class="inline-block mr-4">
                                            <i class="icon-Notepad inline-block text-md"></i>
                                            <span class="text-sm">{{ $plan->recipe[0]->difficulty }}</span>
                                        </div>
                                    @endif

                                    @if (isset($plan->recipe[0]->time))
                                        <div class="inline-block">
                                            <i class="iconsminds-clock inline-block text-md"></i>
                                            <span class="text-sm">{{ $plan->recipe[0]->time }}</span>
                                        </div>
                                    @endif
                                </div>

                                <span class="font-bold uppercase text-sm mb-2 block">Ingredientes</span>
                                <div class="text-sm text-gray-500 mb-4">
                                    <ul class="">
                                        @foreach ($plan->ingredients as $item)
                                            <li>{{  $item->ingredients }}</li>
                                        @endforeach
                                    </ul>
                                </div>

                                <span class="font-bold uppercase text-sm mb-2 block">Procedimiento</span>
                                <div class="text-sm text-gray-500 mb-4">
                                    {!! $plan->recipe[0]->preparation !!}
                                </div>

                                @if (isset($plan->comments))
                                    <span class="font-bold uppercase text-sm mb-2 block">Comentarios</span>
                                    <div class="text-sm text-gray-500 mb-4">
                                        {!! $plan->comments !!}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection