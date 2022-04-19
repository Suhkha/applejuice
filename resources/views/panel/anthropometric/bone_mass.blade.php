<div id="bone_mass" class="first details-list mt-8 overflow-auto">
    <div id="bone_mass_chart" style="height: 300px;"></div>

    <div class="flex border-olive border-2 mb-4 rounded-lg ">
        <div class="w-3/4 m-auto inline-block py-3">
            <div class="text-sm text-center self-center">
                La masa ósea es...
            </div>
        </div>
    </div>

    @foreach ($bone as $boneData)
        <div class="flex border-b border-gray-200 mb-4">
            <div class="w-4/5 inline-block ml-4">
                <div class="text-sm mb-2 self-center">{{ \Carbon\Carbon::parse(strtotime($boneData->created_at))->formatLocalized('%d de %B de %Y') }}</div>
                    <div class="text-xs text-gray-500 mb-4">
                        {!! $history_data->comments !!}
                    </div>
                </div>
            
            <div class="w-1/5 inline-block mr-4 ml-2 self-center">
                <span class="text-sm text-right block pb-2 mr-1">{{ $boneData->bone_mass }} kg</span>
            </div>
        </div>
    @endforeach

    <script>
        const boneMassChart = new Chartisan({
            el: '#bone_mass_chart',
            url: "@chart('chart_route_bone_mass')"+"?id={{ Auth::user()->id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#6867AC'])
                .tooltip()
                .datasets([{ type: 'line'}]),
        });
    </script>
</div>