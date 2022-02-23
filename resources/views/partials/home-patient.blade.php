<div class="w-full">
    <div class="lg:px-20 px-3 pb-20 pt-8">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div class="grid grid-cols-1 lg:content-center">
                <h1 class="font-bold pt-6 text-4xl">¡Hola <span class="text-teal-500 font-bold">{{ $user->name }}</span>, lo estás haciendo increible!</h1>
                <span class="block pt-6">Revisa tu progreso y sigue <span class="text-teal-500 font-bold">motivándote</span></span>

                <a href="" class="mt-6 p-2 block text-white bg-pink-400 ease-linear transition-all duration-150 rounded outline-none focus:outline-none w-fit h-fit">¡Quiero ver!</a>
            </div>
        </div>
    </div>

    <div class="mx-auto lg:mx-0">
        <div class="grid grid-cols-2 lg:grid-cols-4">
            <a href="" class="m-2 bg-gradient-to-r from-sky-400 to-cyan-300">
                <div class="flex flex-col p-6 relative">
                    <p class="text-white font-bold text-xs uppercase">Peso</p>
                    <i class="fa-solid fa-weight-scale text-6xl text-white mt-4"></i>
                    <p class="block mt-4 z-10 text-white ">
                        <span class="text-3xl font-bold">{{ $data->weight }}</span>kg
                    </p>
                </div>
            </a>
            <a href="" class="m-2 bg-gradient-to-r from-blue-400 to-emerald-400">
                <div class="flex flex-col p-6 relative">
                    <p class="text-white font-bold text-xs uppercase">Grasa</p>
                    <i class="fa-solid fa-chart-column text-6xl text-white mt-4"></i>
                    <p class="block mt-4 z-10 text-white">
                        <span class="text-3xl font-bold">{{ $data->average_fat }}</span>%
                    </p>
                </div>
            </a>
            <a href="" class="m-2 bg-gradient-to-r from-sky-400 to-blue-500">
                <div class="flex flex-col p-6 relative">
                    <p class="text-white font-bold text-xs uppercase">Agua</p>
                    <i class="fa-solid fa-droplet text-6xl text-white mt-4"></i>
                    <p class="block mt-4 z-10 text-white">
                        <span class="text-3xl font-bold">{{ $data->water }}</span>%
                    </p>
                </div>
            </a>
            <a href="" class="m-2 bg-blue-500 ">
                <div class="flex flex-col p-6 relative">
                    <p class="text-white font-bold text-xs uppercase">Músculo</p>
                    <i class="fa-solid fa-dumbbell text-6xl text-white mt-4"></i>
                    <p class="block mt-4 z-10 text-white">
                        <span class="text-3xl font-bold">{{ $data->muscle_mass_kilo }}</span>kg
                    </p>
                </div>
            </a>
        </div>
    </div>

    <div class="mx-auto lg:mx-0">
        <div class="grid grid-cols-1">
            <a href="" class="m-2 border-2 border-teal-400">
            <div class="flex flex-col p-6 relative">
                <p class="font-bold text-xs uppercase text-teal-400">Próxima cita</p>
                <p class="block mt-4 z-10 text-xl">
                    {{ !isset($agenda->full_date) ? 'Sin fecha programada' : \Carbon\Carbon::parse(strtotime($agenda->full_date))->formatLocalized('%d de %B de %Y') }} {{!isset($agenda->location) ? '' : "en ".$agenda->location }}
                </p>
            </div>
            </a>
        </div>

    <div class="mx-auto lg:mx-0">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <a href="" class="m-2 bg-gradient-to-r from-violet-500 to-orange-300 ">
            <div class="flex flex-col p-6 relative">
                <p class="text-white font-bold text-xs uppercase">Receta del día</p>
                <i class="fa-solid fa-apple-whole text-6xl text-white mt-4"></i>
                <p class="block mt-4 z-10 text-white text-2xl">
                    {{ $recipe->title }}
                </p>
            </div>
            </a>
            <a href="" class="m-2 bg-gradient-to-r from-rose-400 via-fuchsia-500 to-indigo-500">
                <div class="flex flex-col p-6 relative">
                    <p class="text-white font-bold text-xs uppercase">Produto recomendado</p>
                    <i class="fa-solid fa-cart-shopping text-6xl text-white mt-4"></i>
                    <p class="block mt-4 z-10 text-white text-2xl">
                        {{ $product->name }}
                    </p>
                </div>
            </a>
        </div>
    </div>
</div> 