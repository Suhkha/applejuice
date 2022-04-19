<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Planes alimenticios</h3>
        </div>
        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('pdf', $userDetail->user_id) }}" class="bg-white text-teal-400 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Añadir plan (PDF)</a>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
    <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
            <tr>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Fecha
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    PDF
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Eliminar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pdfs as $pdf)
                <tr>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{ $pdf->created_at->isoFormat('DD-MMMM-Y') }}
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        <a href="{{url('/pdf/'.$pdf->pdf)}}" target="_blank" rel="archives" class="plans-pdf">
                            @include('svg') Ver PDF
                        </a>
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        <a href="#" data-delete="{{ route('delete-pdf', $pdf->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar registro" class="delete-item bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>