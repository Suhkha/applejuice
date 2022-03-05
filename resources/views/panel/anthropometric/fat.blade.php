<div id="average_fat" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                {{ $facts->average_fat != "" ? $facts->average_fat : 'Svelfit' }}
            </div>
        </div>
    </div>

    <div id="fat_chart" style="height: 300px;"></div>

    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Las últimas consultas
            </div>
        </div>
    </div>

    @foreach ($fat as $fatData)
        <div class="flex border-b border-gray-200 mb-4">
            <div class="w-4/5 inline-block ml-4">
                <div class="text-sm mb-2 self-center">{{ \Carbon\Carbon::parse(strtotime($fatData->created_at))->formatLocalized('%d de %B de %Y') }}</div>
                    <div class="text-xs text-gray-500 mb-4">
                        {!! $fatData->comments !!}
                    </div>
                </div>
            
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-sm text-right block pb-2 mr-1">{{ $fatData->average_fat }}%</span>
            </div>
        </div>
    @endforeach

    <script>
        const fatChart = new Chartisan({
            el: '#fat_chart',
            url: "@chart('chart_route_fat')"+"?id={{ Auth::user()->id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#f97316'])
                .tooltip()
                .datasets([{ type: 'line'}]),
        });
    </script>
</div>