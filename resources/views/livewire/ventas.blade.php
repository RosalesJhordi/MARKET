<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 text-2xl font-semibold">
        Ventas
    </h1>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

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
    @if (session()->has('message'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ session('message') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif

    {{-- ventas modal --}}

    <div id="ventas-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow ">
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5">
                    <h3 class="text-xl font-semibold text-gray-900 ">
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
                    <form class="space-y-4" action="{{route('AddVenta')}}" method="POST" novalidate>
                        @csrf
                        <div>
                            <label for="categoria_producto"
                                class="block mb-2 text-sm font-medium text-gray-900 ">
                                Producto
                            </label>
                            <select id="countries" wire:model.live="categoria_producto" name="producto_id"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Seleciona Producto</option>
                                @foreach ($productos as $product)
                                    <option value="{{ $product->id }}">{{ $product->nombre }} {{ $product->marca }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="cantidad"
                                class="block mb-2 text-sm font-medium text-gray-900">Cantidad</label>
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
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                required />
                        </div>

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- ventas --}}

    @foreach (['nombre', 'marca', 'precio', 'categoria', 'stock', 'imagen','cantidad','total','producto_id'] as $campo)
        @if ($errors->has($campo))
            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    iziToast.error({
                        title: 'Error',
                        message: "{{ $errors->first($campo) }}",
                        position: 'topRight',
                        timeout: 5000,
                        pauseOnHover: true,
                        closeOnClick: true,
                        progressBar: true,
                        theme: 'light',
                        transitionIn: 'bounce',
                    });
                });
            </script>
        @endif
    @endforeach

    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-700 ">
            <thead class="text-xs font-semibold text-gray-600 uppercase bg-gray-100 ">
                <tr>
                    <th scope="col" class="px-6 py-4">Producto</th>
                    <th scope="col" class="px-6 py-4">Marca</th>
                    <th scope="col" class="px-6 py-4">Cantidad</th>
                    <th scope="col" class="px-6 py-4">Total</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 ">
                @foreach ($ventas as $venta)
                    <tr class="transition duration-200 ">
                        <td class="px-6 py-4 font-medium text-gray-900 ">
                            {{ $venta->producto->nombre }}
                        </td>
                        <td class="px-6 py-4 text-gray-500 ">
                            {{ $venta->producto->marca }}
                        </td>
                        <td class="px-6 py-4 text-center text-gray-600 ">
                            {{ $venta->cantidad }}
                        </td>
                        <td class="px-6 py-4 font-semibold text-green-600 ">
                            ${{ number_format($venta->total, 2) }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
