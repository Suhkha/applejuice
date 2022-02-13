<div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
    <div class="flex justify-center py-4">
        <div class="mb-6">
            
        <img src="" class="{{ (Request::is('admin/products/*') || Request::is('admin/recipes/*')) ? 'hero-img-two' : 'hero-img-one' }}" width="300" alt="">
    </div>
</div>

<div class="flex justify-center">
    <div class="flex">
        <h1 class="text-gray-600 font-bold md:text-2xl text-xl px-8 md:px-8">{{ $sectionTitle }}</h1>
    </div>
</div>