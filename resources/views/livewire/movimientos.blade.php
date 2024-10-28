<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 text-2xl font-semibold">
        Movimientos
    </h1>
    <div class="sticky top-0 grid grid-cols-2 gap-2 py-2 bg-white md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

        <div wire:poll="usuaurios" class="p-4 bg-gray-200">
            <h2 class="flex items-center justify-between mb-4 text-xl font-bold">
                Ingresos
            </h2>
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-amber-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Total Ingresos</p>
                        <p class="font-bold text-green-500">S/. {{ $total }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 bg-gray-200">
            <h2 class="flex items-center justify-between mb-4 text-xl font-bold">
                Egresos
                <button data-modal-target="egresos-modal" data-modal-toggle="egresos-modal"
                    class="p-1 bg-red-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 mr-4 bg-red-500 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v7.5m2.25-6.466a9.016 9.016 0 0 0-3.461-.203c-.536.072-.974.478-1.021 1.017a4.559 4.559 0 0 0-.018.402c0 .464.336.844.775.994l2.95 1.012c.44.15.775.53.775.994 0 .136-.006.27-.018.402-.047.539-.485.945-1.021 1.017a9.077 9.077 0 0 1-3.461-.203M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>

                    </div>
                    <div>
                        <p class="text-lg font-bold">Total Egresos</p>
                        <p class="font-bold text-red-500">S/. {{ $egresosTotal }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-4 bg-gray-200">
            <h2 class="flex items-center justify-between mb-4 text-xl font-bold">
                Ventas
                <button data-modal-target="ventas-modal" data-modal-toggle="ventas-modal"
                    class="p-1 rounded-full bg-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-lime-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>

                    </div>
                    <div>
                        <p class="text-lg font-bold">Total Ventas</p>
                        <p class="font-bold text-green-500">{{ count($ventas) }}</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="relative py-2 mt-3 overflow-x-auto shadow-md sm:rounded-lg">
        <h1 class="py-2 text-2xl">Movimientos</h1>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-slate-200 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Id</th>
                    <th scope="col" class="px-6 py-3">Descripción</th>
                    <th scope="col" class="px-6 py-3">Total</th>
                    <th scope="col" class="px-6 py-3">Fecha</th>
                    <th scope="col" class="px-6 py-3">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($movimientos as $movimiento)
                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                        <td class="px-6 py-3 ">{{ $movimiento->id }}</td>
                        <td class="px-6 py-3 ">{{ $movimiento->descripcion }}</td>
                        <td class="px-6 py-3 ">
                            @if ($movimiento->type == 'egresos')
                                <span class="bg-red-100 text-red-600 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                    S/. -{{ $movimiento->total }}
                                </span>
                            @else
                                <span
                                    class="bg-green-100 text-green-600 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                    S/. +{{ $movimiento->total }}
                                </span>
                            @endif
                        </td>
                        <td class="px-6 py-3 ">{{ \Carbon\Carbon::parse($movimiento->created_at)->format('d/m/Y H:i') }}
                        </td>
                        <td class="px-6 py-3 ">
                            @if ($movimiento->type == 'egresos')
                                <span class="bg-red-100 text-red-600 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                    S/. {{ $movimiento->type }}
                                </span>
                            @else
                                <span
                                    class="bg-green-100 text-green-600 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded">
                                    S/. {{ $movimiento->type }}
                                </span>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</div>
