<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Objetivos</h3>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
    <div class="card inline-block overflow-hidden">
        <div class="card__copy w-full px-4 max-w-full flex-grow flex-1">
            <div class="card__body text-base pb-2">
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Peso: </label>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $goal->weight }}</span>
    
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Alimentos favoritos: </label>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $goal->favorite_aliments }}</span>
    
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Objetivos: </label>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $goal->main_goals }}</span>
            
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Métodos adicionales: </label>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $goal->additional_methods }}</span>
                
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Comentarios: </label>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $goal->comments }}</span>
            </div>
        </div>
    </div>
</div>