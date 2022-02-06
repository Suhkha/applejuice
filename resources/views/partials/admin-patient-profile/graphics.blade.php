<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Progreso</h3>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">

    <div id="weight" style="height: 300px;"></div>

    <div id="fat" style="height: 300px;"></div>

    <div id="muscle" style="height: 300px;"></div>

    <div id="waist" style="height: 300px;"></div>

    <div id="thigh" style="height: 300px;"></div>

    <div id="hips" style="height: 300px;"></div>

    <div id="biceps" style="height: 300px;"></div>

    <script>
        const weightChart = new Chartisan({
            el: '#weight',
            url: "@chart('chart_route_weight')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#6867AC'])
                .tooltip(),
        });

        const fatChart = new Chartisan({
            el: '#fat',
            url: "@chart('chart_route_fat')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#A267AC'])
                .tooltip(),
        });


        const muscleChart = new Chartisan({
            el: '#muscle',
            url: "@chart('chart_route_muscle')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#CE7BB0'])
                .tooltip(),
        });

        const waistChart = new Chartisan({
            el: '#waist',
            url: "@chart('chart_route_waist')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#FFBCD1'])
                .tooltip(),
        });

        const thighChart = new Chartisan({
            el: '#thigh',
            url: "@chart('chart_route_thigh')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#1572A1'])
                .tooltip(),
        });

        const hipsChart = new Chartisan({
            el: '#hips',
            url: "@chart('chart_route_hips')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#5584AC'])
                .tooltip(),
        });

        const bicepsChart = new Chartisan({
            el: '#biceps',
            url: "@chart('chart_route_biceps')"+"?id={{ $userDetail->user_id }}",
            hooks: new ChartisanHooks()
                .legend()
                .colors(['#7897AB'])
                .tooltip(),
        });
            
    </script>
</div>