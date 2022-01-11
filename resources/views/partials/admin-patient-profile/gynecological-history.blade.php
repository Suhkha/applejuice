<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Antecedentes Ginecológicos</h3>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
    <div class="card inline-block overflow-hidden">
        <div class="card__copy w-full px-4 max-w-full flex-grow flex-1">
            <div class="card__body text-base pb-2">
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Menarca: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->menarche }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->menarche_comments }}</span>
    
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Embarazos: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->pregnancies }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->pregnancies_comments }}</span>
    
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Abortos: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->abortion }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->abortion_comments }}</span>
            
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Menstruación: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->menstruation }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->menstruation_comments }}</span>
                
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Métodos anticonceptivos: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->contraceptive_method }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->contraceptive_method_comments }}</span>
                
                <label class="block uppercase md:text-sm text-xs text-light font-semibold">Medicinas: </label>
                <span class="block md:text-sm text-xs text-light">{{ $gynecological->medicines }}</span>
                <span class="block md:text-sm text-xs text-light mb-3">{{ $gynecological->medicines_comments }}</span>
            </div>
        </div>
    </div>
</div>