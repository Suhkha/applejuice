<div class="w-full  mb-12 xl:mb-0">

    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-xl text-blueGray-700">Top 5 de pacientes con <span class="bold text-teal-400">mejor porcentaje de grasa</span> en {{ now()->isoFormat('MMMM-Y')}}</h3>
                </div>
            </div>
        </div>

        <div class="block w-full overflow-x-auto">
            <div id="top_fat" style="height: 300px;"></div>

            <script>
                const topFatChart = new Chartisan({
                    el: '#top_fat',
                    url: "@chart('chart_route_top_fat')",
                    hooks: new ChartisanHooks()
                        .legend()
                        .colors(['#CE7BB0'])
                        .tooltip()
                        .datasets([{ type: 'line'}]),
                });
            </script>
        </div>
    </div>

    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-xl text-blueGray-700">Top 5 de pacientes con <span class="bold text-teal-400">mejor masa muscular</span> en {{ now()->isoFormat('MMMM-Y')}}</h3>
                </div>
            </div>
        </div>

        <div class="block w-full overflow-x-auto">
            <div id="top_muscle" style="height: 300px;"></div>

            <script>
                const topMuscleChart = new Chartisan({
                    el: '#top_muscle',
                    url: "@chart('chart_route_top_muscle')",
                    hooks: new ChartisanHooks()
                        .legend()
                        .colors(['#6867AC'])
                        .tooltip()
                        .datasets([{ type: 'line'}]),
                });
            </script>
        </div>
    </div>

    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
            <div class="flex flex-wrap items-center">
                <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1">
                    <h3 class="font-semibold text-xl text-blueGray-700 mb-4">Configuraciones</h3>
                    <div class="grid grid-cols-2 gap-5 md:gap-8">
                        <a class="bg-gradient-to-r from-orange-500 to-pink-500 hover:from-pink-500 hover:to-orange-500 text-white md:p-4 py-2 block rounded outline-none focus:outline-none ease-linear transition-all duration-150" href="{{ route('facts.index') }}" title="Configura la información a mostrar del antropometrico aqui">Datos rápidos del antropométrico</a>

                        <a class="bg-gradient-to-r from-orange-500 to-pink-500 hover:from-pink-500 hover:to-orange-500 text-white md:p-4 py-2 block rounded outline-none focus:outline-none ease-linear transition-all duration-150" href="{{ route('reset-admin-password') }}" title="Cambia tu contraseña aquí">Cambiar contraseña del admin</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>