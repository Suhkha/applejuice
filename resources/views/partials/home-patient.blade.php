<div class="w-full">
    <div class="lg:px-20 px-3 pb-20 pt-8">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="grid grid-cols-1 lg:content-center">
                <h1 class="font-bold pt-6 text-4xl">¡Hola <span class="text-teal-500 font-bold">{{ $user->name }}</span>, lo estás haciendo increible!</h1>
                <span class="block pt-6">Revisa tu progreso y sigue <span class="text-teal-500 font-bold">motivándote</span></span>

                <a href="{{ route('history') }}" class="mt-6 p-2 block text-white bg-gradient-to-r from-orange-500 to-pink-500 ease-linear transition-all duration-150 rounded outline-none focus:outline-none w-fit h-fit">¡Quiero ver!</a>
            </div>
        </div>
    </div>

    
    @if (isset($data))
        <div class="mx-auto lg:mx-0">
            <div class="grid grid-cols-2 lg:grid-cols-4">
                <div class="m-2 bg-gradient-to-tr from-blue-400 to-blue-600">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Peso</p>
                        <i class="iconsminds-footprint-2 text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white ">
                            <span class="text-3xl font-bold">{{ $data->weight }}</span>kg
                        </p>
                    </div>
                </div>
                <div class="m-2 bg-gradient-to-tr from-pink-400 to-pink-600">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Grasa</p>
                        <i class="icon-Cardiovascular text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white">
                            <span class="text-3xl font-bold">{{ $data->average_fat }}</span>%
                        </p>
                    </div>
                </div>
                <div class="m-2 bg-gradient-to-tr from-orange-400 to-orange-600">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Músculo</p>
                        <i class="iconsminds-weight-lift text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white">
                            <span class="text-3xl font-bold">{{ $data->muscle_mass_kilo }}</span>kg
                        </p>
                    </div>
                </div>
                <div class="m-2 bg-gradient-to-tr from-teal-400 to-teal-600">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Edad metabólica</p>
                        <i class="iconsminds-clock-back text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white">
                            <span class="text-3xl font-bold">{{ $data->metabolic_age }}</span> años
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endif
    
    <div class="mx-auto lg:mx-0">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            @if (isset($recipe))
                <a href="" class="m-2 bg-gradient-to-tl from-blue-400 to-blue-600 ">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Receta del día</p>
                        <i class="iconsminds-chopsticks text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white text-2xl">
                            {{ $recipe->title }}
                        </p>
                    </div>
                </a>
            @endif
            @if (isset($product))
                <a href="" class="m-2 bg-gradient-to-tl from-pink-400 to-pink-600">
                    <div class="flex flex-col p-6 relative">
                        <p class="text-white font-bold text-xs uppercase">Produto recomendado</p>
                        <i class="icon-Bar-Code text-6xl text-white mt-4"></i>
                        <p class="block mt-4 z-10 text-white text-2xl">
                            {{ $product->name }}
                        </p>
                    </div>
                </a>
            @endif
        </div>
    </div>
</div> 