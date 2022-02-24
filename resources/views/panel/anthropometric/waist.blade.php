<div id="waist" class="first details-list mt-8 overflow-auto">
    <div class="flex border-olive border-2 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class="text-sm text-center self-center">
                La cintura...
            </div>
        </div>
    </div>

    @foreach ($waist as $waistData)
        <div class="flex border-b border-gray-200 mb-4">
            <div class="w-4/5 inline-block ml-4">
                <div class="text-sm mb-2 self-center">{{ \Carbon\Carbon::parse(strtotime($waistData->created_at))->formatLocalized('%d de %B de %Y') }}</div>
                    <div class="text-xs text-gray-500 mb-4">
                        ¡Vamos bien!
                    </div>
                </div>
            
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-sm text-right block pb-2 mr-1">{{ $waistData->waist }} cm</span>
            </div>
        </div>
    @endforeach
</div>