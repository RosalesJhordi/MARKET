<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 text-2xl font-semibold">
        Movimientos
    </h1>
    <div class="sticky top-0 grid grid-cols-2 gap-2 py-2 bg-white md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

        <div class="p-4 bg-gray-200">
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
                        <p class="font-bold text-green-500">S/. {{ $ingresos - $egresos->sum('monto') }}</p>
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
{{-- ventas modal --}}

<div id="ventas-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
<div class="relative w-full max-w-md max-h-full p-4">
    <div class="relative bg-white rounded-lg shadow">
        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
            <h3 class="text-xl font-semibold text-gray-900">
                Agregar Venta
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="ventas-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Cerrar modal</span>
            </button>
        </div>
        <!-- body -->
        <div class="p-4 md:p-5">
            <form class="space-y-4" action="{{ route('AddVenta') }}" method="POST" novalidate>
                @csrf
                <div>
                    <label for="categoria_producto"
                        class="block mb-2 text-sm font-medium text-gray-900 ">
                        Producto
                    </label>
                    <select id="countries" wire:model.live="categoria_producto" name="producto_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">
                        <option selected>Seleciona Producto</option>
                        @foreach ($productos as $product)
                            <option value="{{ $product->id }}"
                                @if ($product->stock == 0) disabled class="text-red-500" @endif>
                                {{ $product->nombre }} {{ $product->marca }}
                                @if ($product->stock == 0)
                                    (Agotado)
                                @endif
                            </option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="cantidad"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" wire:model.live="cantidad"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="0" required />
                    @error('cantidad')
                        <p class="py-2 font-semibold text-red-500">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="total"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Total</label>
                    <input type="number" name="total" id="total" placeholder="total" value="0"
                        wire:model.live="total"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  "
                        required />
                </div>

                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar</button>
            </form>
        </div>
    </div>
</div>
</div>

{{-- modal egresos --}}
<div id="egresos-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

<div class="relative w-full max-w-2xl max-h-full p-4">
    <div class="relative bg-white rounded-lg shadow ">
        <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 ">
            <h3 class="text-xl font-semibold text-gray-900 ">
                Agregar Egreso
            </h3>
            <button type="button"
                class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="egresos-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Cerrar modal</span>
            </button>
        </div>
        <!-- body -->
        <div class="p-4 md:p-5">
            <form class="space-y-4" method="POST" action="{{ route('AddEgreso') }}">
                @csrf
                <div>
                    <label for="proveedor"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Proveedor</label>
                    <input type="text" name="proveedor" id="proveedor" value="{{ old('usuario') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>
                <div>
                    <label for="monto"
                        class="block mb-2 text-sm font-medium text-gray-900 ">Monto</label>
                    <input type="number" name="monto" id="monto" value="{{ old('password') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                </div>

                <button type="submit"
                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                    Agregar Egreso
                </button>
            </form>
        </div>
    </div>
</div>
</div>
    <div class="relative py-2 mt-3 overflow-x-auto shadow-md sm:rounded-lg">
        <h1 class="py-2 text-2xl">Movimientos</h1>
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-slate-200 ">
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
