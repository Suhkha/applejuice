<div id="hips" class="first details-list mt-8 overflow-auto">
    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                {{ isset($facts->hips) ? $facts->hips : 'Svelfit' }}
            </div>
        </div>
    </div>

    <div id="hips_chart" style="height: 300px;"></div>

    <div class="flex bg-teal-400 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class=" text-sm text-center self-center text-white">
                Las últimas consultas
            </div>
        </div>
    </div>

    @foreach ($hips as $hipsData)
        <div class="flex border-b border-gray-200 mb-4">
            <div class="w-4/5 inline-block ml-4">
                <div class="text-sm mb-2 self-center">{{ $hipsData->appointment }}</div>
                    <div class="text-xs text-gray-500 mb-4">
                        {!! $hipsData->comments !!}
                    </div>
                </div>
            
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-sm text-right block pb-2 mr-1">{{ $hipsData->hips }} cm</span>
            </div>
        </div>
    @endforeach

    <script>
        const hipsChart = new Chartisan({
            el: '#hips_chart',
            url: "@chart('chart_route_hips')"+"?id={{ Auth::user()->id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#f97316'])
                .tooltip()
                .datasets([{ type: 'line'}]),
        });
    </script>
</div>