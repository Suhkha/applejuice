@extends('layouts.app')

@section('content')
    <div class="grid grid-cols-1">
        <div class="mx-4 lg:m-auto lg:w-full">
            <div class="plans-wrapper tabs-section relative max-w-screen-sm lg:max-w-screen-md m-auto overflow-x-hidden overflow-y-hidden">
                <ul data-tabs class="plans h-24 box-border whitespace-nowrap overflow-x-auto overflow-y-hidden flex flex-nowrap">
                    <li>
                        <a class="item item-product outline-none cursor-pointer active flex bg-gradient-to-br from-rose-400 via-fuchsia-500 to-indigo-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#categories" data-tabby-default>
                            <div class="self-center m-auto text-center">
                                <i class="icon-Shop-2 text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Categorías</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item item-product outline-none cursor-pointer flex bg-gradient-to-br from-rose-400 via-fuchsia-500 to-indigo-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#favorites">
                            <div class="self-center m-auto text-center">
                                <i class="iconsminds-heart text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Favoritos</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a class="item item-product outline-none cursor-pointer flex bg-gradient-to-br from-rose-400 via-fuchsia-500 to-indigo-500 rounded-lg mx-1 p-4 lg:p-2 box-border relative" href="#all">
                            <div class="self-center m-auto text-center">
                                <i class="icon-Bar-Code text-3xl text-white block"></i>
                                <span class="text-xs text-white lg:text-sm block m-auto whitespace-normal mt-2">Productos</span>
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
                    @include('panel.products.categories')
                    @include('panel.products.favorites')
                    @include('panel.products.all-products') 
                </div>
            </div>
        </div>
    </div>
@endsection