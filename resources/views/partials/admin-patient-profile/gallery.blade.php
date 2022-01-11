<div class="gallery-wrapper">
    <div class="swiper overflow-hidden relative">
        <div class="swiper-wrapper">
            @foreach ($gallery as $image)
                <div class="swiper-slide">
                    <img class="w-full object-cover" src="{{url('/patients/'.$image->image)}}" alt="">
                </div>
            @endforeach
        </div>

        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev text-gray-500"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>