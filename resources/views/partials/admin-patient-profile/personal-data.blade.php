<div class="card inline-block overflow-hidden w-full md:mt-0 mt-6">
	<div class="card__copy space-y-4 px-0 md:px-4 pb-2">
		<div class="card__title text-2xl mb-3 px-4 py-3 border-0 text-white bg-teal-400 ">Datos personales</div>
		<div class="card__body text-base pb-2">
			<label class="block uppercase md:text-sm text-xs text-light font-semibold">Nombre: </label>
            <span class="block mb-3">{{ $userDetail->name }} {{ $userDetail->last_name }} {{ $userDetail->second_last_name }}</span>

            <label class="block uppercase md:text-sm text-xs text-light font-semibold">Edad: </label>
            <span class="block mb-3">{{ $userDetail->age }} años</span>

            <label class="block uppercase md:text-sm text-xs text-light font-semibold">Fecha de nacimiento: </label>
            <span class="block mb-3">{{ $userDetail->birthday }}</span>
        
            <label class="block uppercase md:text-sm text-xs text-light font-semibold">Religión: </label>
            <span class="block mb-3">{{ $userDetail->religion }}</span>
            
            <label class="block uppercase md:text-sm text-xs text-light font-semibold">Nivel educativo: </label>
            <span class="block mb-3">{{ $userDetail->education_level }}</span>
            
            <label class="block uppercase md:text-sm text-xs text-light font-semibold">Empleo: </label>
            <span class="block mb-3">{{ $userDetail->job_position }}</span>
		</div>

        <div class="relative w-full px-0 md:px-4 max-w-full flex-1 text-right">
            <a href="{{ route('gallery', $userDetail->id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">Añadir fotos</a>

            @if (!$treatment)
                <a href="{{ route('treatment', ['user_id' => $userDetail->user_id, 'type' => 'profile']) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">Añadir tratamiento</a>
            @endif
            
            <a href="{{ route('patients.edit', $userDetail->id) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 ease-linear transition-all duration-150" type="button">Editar datos</a>
        </div>
	</div>
</div>
        
            

            