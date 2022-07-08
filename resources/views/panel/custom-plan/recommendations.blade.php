<div id="recommendations" class="first details-list recipe mt-8 overflow-auto">
    <div class="flex bg-orange-500 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                ¡Vamos con todo!
            </div>
        </div>
    </div>

    @if (isset($recommendations))
        <div class="flex border-b border-gray-200 mb-4 md:items-center">
            <div class="w-4/5 inline-block ml-4">
                <div class="text-sm md:text-base mb-2 self-center">Recomendaciones</div>
                <div class="text-sm md:text-base text-gray-500 mb-4">
                    {!! $recommendations->recommendation !!}
                </div>
            </div>
        </div>
     @endif
</div>