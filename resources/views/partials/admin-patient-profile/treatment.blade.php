<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Tratamiento</h3>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
    <div class="card inline-block overflow-hidden">
        <div class="card__copy w-full px-0 md:px-4 max-w-full flex-grow flex-1">
            <div class="card__body text-base pb-2">
                <label class="block uppercase text-light font-semibold">Tratamiento: </label>
                <span class="block text-light mb-3">{!! $treatment->treatment !!}</span>
            </div>

            <div class="relative w-full max-w-full flex-grow flex-1">
                <a href="{{ route('edit-treatment', ['id' => $treatment->id, 'profile_id' => $userDetail->id]) }}" class="bg-teal-400 text-white text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150 block text-center">Editar tratamiento</a>
            </div>
        </div>
    </div>
</div>