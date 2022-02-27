<div id="profile" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class="text-sm text-center self-center text-white">
                Un poco sobre ti.
            </div>
        </div>
    </div>

    <div class="flex border-b border-gray-200 mb-4">
        <div class="w-4/5 inline-block ml-4">
            <div class="text-sm mb-2 self-center">{{ $user->name }} {{ $user->last_name }} {{ $user->second_last_name }}</div>
                <div class="text-xs text-gray-500 mb-4">
                </div>
            </div>
        
        <div class="w-1/5 inline-block mr-4 ml-2 self-start">
            <span class="text-sm text-right block pb-2 mr-1">{{ $user->age }} años</span>
        </div>
    </div>

    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class="text-sm text-center self-center text-white">
                Antes y ahora
            </div>
        </div>
    </div>

    <div class="flex mb-4">
        <div class="gallery-wrapper">
            @if ($galleryOld)
                <div class="swiper overflow-hidden relative">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full object-cover" src="{{url('/patients/'.$galleryOld->image)}}" alt="">
                        </div>
                    </div>
                    
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="w-full object-cover" src="{{url('/patients/'.$galleryNow->image)}}" alt="">
                        </div>
                    </div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev text-gray-500"></div>
                    <div class="swiper-button-next"></div>
                </div>
            @else
                <img class="w-3/4 my-0 mx-auto block object-cover" src="{{URL::asset('/img/svelfit-logo-medium.png')}}" alt="">
            @endif
        </div>
    </div>
</div>