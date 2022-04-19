<div id="plans" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-orange-500 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Encuentra aquí todos tus planes personalizados.
            </div>
        </div>
    </div>

    @foreach ($pdfs as $item)
        <div class="flex border-b border-gray-200 mb-4 md:items-center">
            <div class="w-4/5 inline-block ml-4">
                <a href="{{url('/pdf/'.$item->pdf)}}" target="_blank" rel="archives" class="plans-pdf">
                    <div class="text-sm md:text-base mb-2 self-center">Ver PDF</div>
                    <div class="text-sm md:text-base text-gray-500 mb-4">
                        {{ $item->created_at->isoFormat('DD-MMMM-Y') }}
                    </div>
                </a>
            </div>
                
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-xs md:text-base text-right block pb-2 mr-1">
                    <i class="iconsminds-file-clipboard-file---text text-3xl block"></i>
                </span>
            </div>
        </div>
    @endforeach
</div>