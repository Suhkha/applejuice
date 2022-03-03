<div id="recipes" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-orange-500 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Encuentra aquí todas tus recetas con tus porciones personalizadas.
            </div>
        </div>
    </div>

    @foreach ($recipes as $item)
        <div class="flex mb-4">
            <div class="w-full inline-block md:hidden ">
                <a href="{{ route('custom-plan.show', $item->recipe[0]->id) }}">
                    <img class="object-cover rounded-lg" src="{{URL::asset('/img/breakfast-placeholder.jpg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="flex border-b border-gray-200 mb-4 md:items-center">
            <div class="w-1/2 md:inline-block mr-4 ml-2 hidden">
                <a href="{{ route('custom-plan.show', $item->recipe[0]->id) }}">
                    <img class="object-cover rounded-lg mb-4" src="{{URL::asset('/img/breakfast-placeholder.jpg')}}" alt="">
                </a>
            </div>
            <div class="w-4/5 inline-block ml-4">
                <a href="{{ route('custom-plan.show', $item->recipe[0]->id) }}">
                    <div class="text-sm md:text-base mb-2 self-center">{{ $item->recipe[0]->title }}</div>
                    <div class="text-sm md:text-base text-gray-500 mb-4">
                        {!! $item->comments !!}
                    </div>
                </a>
            </div>
                
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-sm md:text-base text-right block pb-2 mr-1">
                    {!! $item->recipe[0]->time !!}
                </span>
            </div>
        </div>
    @endforeach
</div>