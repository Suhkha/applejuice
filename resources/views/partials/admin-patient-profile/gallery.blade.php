<div class="gallery-wrapper">
    @if (count($gallery) > 0)
        <div class="swiper overflow-hidden relative">
            <div class="swiper-wrapper">
                
                @foreach ($gallery as $image)
                    <div class="swiper-slide">
                        <img class="w-1/2 m-auto object-cover" src="{{url('/patients/'.$image->image)}}" alt="">
                    </div>
                @endforeach
            </div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev text-gray-500"></div>
            <div class="swiper-button-next"></div>
        </div>
    @else
        <img class="w-3/4 my-0 mx-auto block object-cover" src="{{URL::asset('/img/svelfit-logo-medium.png')}}" alt="">
    @endif
</div>

<div class="relative w-full px-0 md:px-4 max-w-full flex-1 text-right">
    <a href="{{ route('gallery', $userDetail->user_id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150 inline-block" >Añadir fotos</a>
</div>