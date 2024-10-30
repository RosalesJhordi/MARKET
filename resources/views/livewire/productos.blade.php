<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 text-2xl font-semibold">
        Productos
    </h1>

    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

        <div class="p-4 bg-gray-200">
            <h2 class="flex items-center justify-between mb-4 text-xl font-bold">
                Productos
                <button data-modal-target="productos-modal" data-modal-toggle="productos-modal"
                    class="p-1 rounded-full bg-cyan-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-4 bg-white rounded-lg shadow-md">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 h-12 mr-4 rounded-full bg-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-lg font-bold">Total Productos</p>
                        <p class="font-bold text-green-500">{{ count($productos) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- productos modal --}}
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
    @foreach (['nombre', 'marca', 'precio', 'categoria', 'stock', 'imagen'] as $campo)
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

    <div id="productos-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <div class="relative w-full max-w-2xl max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow ">
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Agregar Producto
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto
                        inline-flex justify-center items-center"
                        data-modal-hide="productos-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Cerrar modal</span>
                    </button>
                </div>
                <!-- body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" method="POST" action="{{ route('Producto') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nombre_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre de
                                producto</label>
                            <input type="text" wire:model.live='nombre_producto' name="nombre" id="nombre_producto"
                                value="{{ old('nombre') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                " />
                        </div>
                        <div>
                            <label for="marca_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Marca de
                                producto</label>
                            <input type="text" wire:model.live="marca_producto" name="marca" id="marca_producto"
                                value="{{ old('narca') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="precio_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Precio de
                                producto</label>
                            <input type="text" wire:model.live="precio_producto" name="precio" id="precio_producto"
                                value="{{ old('precio') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />

                        </div>
                        <div>
                            <label for="categoria_producto" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Categoria
                            </label>
                            <select id="countries" wire:model.live="categoria_producto" name="categoria"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Seleciona Categoria</option>
                                <option value="Bebida">Bebida</option>
                                <option value="Regalo">Regalo</option>
                                <option value="Gas">Gas</option>
                            </select>
                        </div>
                        <div>
                            <label for="stock_producto" class="block mb-2 text-sm font-medium text-gray-900">Stock de
                                producto</label>
                            <input type="number" wire:model.live="stock_producto" name="stock" id="stock_producto"
                                value="{{ old('stock') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />

                        </div>
                        <div>
                            <label for="imagen_producto"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Imagen</label>
                            <input type="file" name="imagen" id="imagen"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                            Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="flex items-center justify-between w-full py-2">
        <h1 class="py-2 text-2xl font-semibold">Productos</h1>
        <form class="">
            <div class="flex">
                <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only ">Filtro</label>
                <button id="dropdown-button" data-dropdown-toggle="dropdown"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-s-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 "
                    type="button">Categorias <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg></button>
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 ">
                    <ul class="py-2 text-sm text-gray-700 " aria-labelledby="dropdown-button">
                        @foreach ($categorias as $categoria)
                            <li>
                                <button type="button" wire:click='filtro("{{ $categoria }}")'
                                    class="inline-flex w-full px-4 py-2 hover:bg-gray-100 ">{{ $categoria }}</button>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="relative w-full">
                    <input type="search" id="search-dropdown" wire:model.live='buscado'
                        class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Buscar producto" required />
                    <button type="button" wire:click='todos'
                        class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 ">
                        <svg class="w-4 h-4" aria-hidden="true" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>

                        <span class="sr-only">Search</span>
                    </button>
                </div>
            </div>
        </form>

    </div>
    <div class="grid grid-cols-2 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-5 2xl:grid-cols-6">
        @foreach ($productos as $producto)
            <div class="w-full bg-white border border-gray-200 rounded-lg shadow ">
                <img class="w-full rounded-t-lg h-52 imagen"
                    src="{{ asset('ServidorProductos/' . $producto->imagen) }}" alt="Imagen" />
                <div class="p-5">
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">
                            {{ $producto->nombre }}</h5>
                    </a>
                    <p class="text-base text-gray-700">Marca: {{ $producto->marca }}</p>
                    <p class="text-base text-gray-700">Precio: S/. {{ number_format($producto->precio, 2) }}</p>
                    <p class="text-base text-gray-700">Categoría: {{ $producto->categoria }}</p>
                    <p class="text-base text-gray-700">Stock: {{ $producto->stock }}</p>
                </div>
                <div class="w-full px-2 mb-2">
                    <button data-modal-target="ventas-modal" data-modal-toggle="ventas-modal"
                        class="w-full p-1 text-white bg-lime-500 hover:bg-green-500 btn">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-white" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                        </svg>
                        vender
                    </button>
                </div>
            </div>
        @endforeach
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
                            <label for="categoria_producto" class="block mb-2 text-sm font-medium text-gray-900 ">
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
                            <label for="total" class="block mb-2 text-sm font-medium text-gray-900 ">Total</label>
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
</div>
