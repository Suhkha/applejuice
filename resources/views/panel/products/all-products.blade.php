<div id="all" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-pink-500 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Todos los productos que te recomendamos aquí están.
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1  lg:grid-cols-2">
        @foreach ($products as $item)
            <div class="flex mb-4 md:hidden">
                <div class="w-full inline-block md:hidden">
                    <img class="object-cover rounded-lg" src="{{url('/products/'.$item->image)}}" alt="">
                </div>
            </div>
            <div class="flex border-b border-gray-200 mb-4 md:items-center">
                <div class="w-1/2 md:inline-block mr-4 ml-2 hidden">
                    <img class="object-cover rounded-lg mb-4" src="{{url('/products/'.$item->image)}}" alt="">
                </div>
                <div class="w-4/5 inline-block ml-4">
                    <div class="text-sm md:text-base mb-2 self-center">{{ $item->name }}</div>
                    <div class="text-sm md:text-base text-gray-500 mb-4">
                        {!! $item->comments !!}
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>