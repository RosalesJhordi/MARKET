<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 text-2xl font-semibold">
        Cajas
    </h1>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

        <div class="p-4 bg-gray-200">
            <h2 class="flex items-center justify-between mb-4 text-xl font-bold">
                Cajas
                <button data-modal-target="cajas-modal" data-modal-toggle="cajas-modal"
                    class="p-1 bg-indigo-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 mr-4 bg-indigo-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Total Cajas</p>
                        <p class="font-bold text-green-500">{{ count($cajas) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative py-2 mt-3 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-green-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Usuario</th>
                    <th scope="col" class="px-6 py-3">Permisos</th>
                    <th scope="col" class="px-6 py-3">Fecha de Creación</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cajas as $caja)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $caja->usuario }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($caja->permisos as $permiso)
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800">
                                    {{ $permiso }}
                                </span>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            {{ $caja->created_at->format('d/m/Y') }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
