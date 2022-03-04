<div id="categories" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-pink-500 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Todos los productos organizados por categorías.
            </div>
        </div>
    </div>

    <div class="grid grid-cols-2  lg:grid-cols-4">
        @foreach ($categories as $category)
            <div class="flex mb-4">
                <div class="w-full inline-block">
                    <a href="{{ route('category.products', $category->id)}}">
                        <img class="object-cover rounded-lg" src="{{url('/category-products/'.$category->cover)}}" alt="">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>