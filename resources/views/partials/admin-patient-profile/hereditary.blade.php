<div class="rounded-t mb-3 px-4 py-3 border-0 bg-teal-400">
    <div class="flex flex-wrap items-center">
        <div class="relative w-full max-w-full flex-grow flex-1">
            <h3 class="font-semibold text-base text-white">Antecedentes Hereditarios</h3>
        </div>
        <div class="relative w-full px-0 md:px-4 max-w-full flex-grow flex-1 text-right">
            <a href="{{ route('hereditary-family-history', ['user_id' => $userDetail->user_id, 'type' => 'profile']) }}" class="bg-white text-teal-400 text-xs font-bold uppercase md:px-6 px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Nuevo antecedente</a>
        </div>
    </div>
</div>
<div class="block w-full overflow-x-auto">
    <table class="items-center bg-transparent w-full border-collapse ">
        <thead>
            <tr>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Antecedente
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Tipo
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Comentarios
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Editar
                </th>
                <th class="px-6 bg-blueGray-50 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                    Eliminar
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hereditary as $item)
                <tr>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{ $item->hereditary[0]->name }}
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {{ $item->hereditary[0]->type == 0 ? 'Patológico' : 'No patológico' }}
                    </td>

                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        {!! $item->comments ? $item->comments : "Sin comentarios" !!}
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        <a href="{{ route('edit-hereditary', ['id' => $item->id, 'profile_id' => $userDetail->id]) }}" class="bg-teal-400 text-white hover:bg-teal-300 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"  >Editar</a>
                    </td>

                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                        <a href="#" data-delete="{{ route('delete-hereditary', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Eliminar registro" class="delete-item bg-red-500 text-white hover:bg-red-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>