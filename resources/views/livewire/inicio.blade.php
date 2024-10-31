<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 font-semibold text-md mg:text-2xl">
        Inicio
    </h1>
    <div class="grid grid-cols-2 gap-2 py-1 bg-white md:py-2 md:grid-cols-3 lg:gap-5 xl:grid-cols-5">

        <div class="p-2 bg-gray-200 md:p-4">
            <h2 class="flex items-center justify-between mb-2 text-sm font-bold md:mb-4 md:text-xl">
                Ingresos
            </h2>
            <div class="flex items-center justify-between p-1 bg-white rounded-lg shadow-md md:p-4">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 mr-4 rounded-full md:h-12 h-9 bg-amber-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6v12m-3-2.818.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold md:text-lg">Total Ingresos</p>
                        <p class="font-bold text-green-500">S/. {{ $ingresos - $egresos->sum('monto') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 bg-gray-200 md:p-4">
            <h2 class="flex items-center justify-between mb-2 text-sm font-bold md:mb-4 md:text-xl">
                Egresos
                <button data-modal-target="egresos-modal" data-modal-toggle="egresos-modal"
                    class="p-1 bg-red-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white md:w-5 md:h-5" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-1 bg-white rounded-lg shadow-md md:p-4">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 mr-4 bg-red-500 rounded-full md:h-12 h-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m3.75 9v7.5m2.25-6.466a9.016 9.016 0 0 0-3.461-.203c-.536.072-.974.478-1.021 1.017a4.559 4.559 0 0 0-.018.402c0 .464.336.844.775.994l2.95 1.012c.44.15.775.53.775.994 0 .136-.006.27-.018.402-.047.539-.485.945-1.021 1.017a9.077 9.077 0 0 1-3.461-.203M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z" />
                        </svg>

                    </div>
                    <div>
                        <p class="text-sm font-bold md:text-lg">Total Egresos</p>
                        <p class="font-bold text-red-500">S/. {{ $egresosTotal }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 bg-gray-200 md:p-4">
            <h2 class="flex items-center justify-between mb-2 text-sm font-bold md:mb-4 md:text-xl">
                Ventas
                <button data-modal-target="ventas-modal" data-modal-toggle="ventas-modal"
                    class="p-1 rounded-full bg-lime-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white md:w-5 md:h-5" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-1 bg-white rounded-lg shadow-md md:p-4">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 mr-4 rounded-full md:h-12 h-9 bg-lime-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z" />
                        </svg>

                    </div>
                    <div>
                        <p class="text-sm font-bold md:text-lg">Total Ventas</p>
                        <p class="font-bold text-green-500">{{ count($ventas) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 bg-gray-200 md:p-4">
            <h2 class="flex items-center justify-between mb-2 text-sm font-bold md:mb-4 md:text-xl">
                Productos
                <button data-modal-target="productos-modal" data-modal-toggle="productos-modal"
                    class="p-1 rounded-full bg-cyan-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white md:w-5 md:h-5" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-1 bg-white rounded-lg shadow-md md:p-4">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 mr-4 rounded-full md:h-12 h-9 bg-cyan-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold md:text-lg">Total Productos</p>
                        <p class="font-bold text-green-500">{{ count($productos) }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="p-2 bg-gray-200 md:p-4">
            <h2 class="flex items-center justify-between mb-2 text-sm font-bold md:mb-4 md:text-xl">
                Cajas
                <button data-modal-target="cajas-modal" data-modal-toggle="cajas-modal"
                    class="p-1 bg-indigo-500 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-3 text-white md:w-5 md:h-5" fill="none"
                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
            </h2>
            <div class="flex items-center justify-between p-1 bg-white rounded-lg shadow-md md:p-4">
                <div class="flex items-center">
                    <div class="flex items-center justify-center w-12 mr-4 bg-indigo-500 rounded-full md:h-12 h-9">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8"
                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 17.25v1.007a3 3 0 0 1-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0 1 15 18.257V17.25m6-12V15a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 15V5.25m18 0A2.25 2.25 0 0 0 18.75 3H5.25A2.25 2.25 0 0 0 3 5.25m18 0V12a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 12V5.25" />
                        </svg>
                    </div>
                    <div>
                        <p class="text-sm font-bold md:text-lg">Total Cajas</p>
                        <p class="font-bold text-green-500">{{ count($cajas) }}</p>
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
                            <label for="monto" class="block mb-2 text-sm font-medium text-gray-900 ">Monto</label>
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

    {{-- productos modal --}}
    @foreach (['nombre', 'marca', 'precio', 'categoria', 'stock', 'imagen', 'cantidad', 'total', 'producto_id', 'proveedor', 'monto'] as $campo)
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
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                        data-modal-hide="productos-modal">
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
                    <form class="space-y-4" method="POST" action="{{ route('Producto') }}"
                        enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="nombre_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre
                                de
                                producto</label>
                            <input type="text" name="nombre" id="nombre_producto" value="{{ old('nombre') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                " />
                        </div>
                        <div>
                            <label for="marca_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Marca de
                                producto</label>
                            <input type="text" name="marca" id="marca_producto" value="{{ old('narca') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="precio_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Precio
                                de
                                producto</label>
                            <input type="text" name="precio" id="precio_producto" value="{{ old('precio') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />

                        </div>
                        <div>
                            <label for="categoria_producto" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Categoria
                            </label>
                            <select id="countries" name="categoria"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Seleciona Categoria</option>
                                <option value="Bebida">Bebida</option>
                                <option value="Regalo">Regalo</option>
                                <option value="Gas">Gas</option>
                            </select>
                        </div>
                        <div>
                            <label for="stock_producto" class="block mb-2 text-sm font-medium text-gray-900 ">Stock de
                                producto</label>
                            <input type="number" name="stock" id="stock_producto" value="{{ old('stock') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5
                                 " />

                        </div>
                        <div>
                            <label for="imagen_producto"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Imagen</label>
                            <input type="file" name="imagen" id="imagen"
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm
                            px-5 py-2.5 text-center ">
                            Agregar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- modal cajas --}}
    <div id="cajas-modal" tabindex="-1" aria-hidden="true" wire:ignore.self
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">

        <div class="relative w-full max-w-2xl max-h-full p-4">
            <div class="relative bg-white rounded-lg shadow ">
                <div class="flex items-center justify-between p-4 border-b rounded-t md:p-5 ">
                    <h3 class="text-xl font-semibold text-gray-900 ">
                        Agregar Caja
                    </h3>
                    <button type="button"
                        class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex
                        justify-center items-center"
                        data-modal-hide="cajas-modal">
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
                    <form class="space-y-4" method="POST" action="{{ route('Producto') }}">
                        @csrf
                        <div>
                            <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 ">Usuario para
                                caja</label>
                            <input type="text" name="usuario" wire:model.live="usuario" id="usuario"
                                value="{{ old('usuario') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                            @error('usuario')
                                <p class="py-2 text-red-500 font-semobold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="contraseña"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña</label>
                            <input type="password" name="contraseña" wire:model.live="contraseña" id="contraseña"
                                value="{{ old('password') }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  " />
                            @error('contraseña')
                                <p class="py-2 text-red-500 font-semobold">{{ $message }}</p>
                            @enderror
                        </div>

                        <button type="button" wire:click="addCaja"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                            Agregar caja
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{-- edit modal cajas --}}
    <dialog id="my_modal_1" class="modal" wire:ignore.self>
        <div class="modal-box">
            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="text-xl font-semibold text-gray-900 ">
                Editar caja
            </h3>
            <!-- body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="POST" action="{{ route('EditCaja') }}">
                    @csrf
                    @if ($editCaja)
                        <div>
                            <label for="usuario" class="block mb-2 text-sm font-medium text-gray-900 ">Nuevo Usuario
                                para
                                caja</label>
                            <input type="text" name="usuario" id="usuario" value="{{ $editCaja->usuario }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                            @error('usuario')
                                <p class="py-2 text-red-500 font-semobold">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="contraseña" class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña
                                nueva</label>
                            <input type="password" name="password" id="contraseña"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                            @error('contraseña')
                                <p class="py-2 text-red-500 font-semobold">{{ $message }}</p>
                            @enderror
                        </div>
                        <input type="hidden" name="id" value="{{ $editCaja->id }}">

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                            Guardar cambios
                        </button>
                    @endif
                </form>
            </div>

        </div>
    </dialog>

    {{-- edit modal productos --}}
    <dialog id="my_modal_2" class="modal" wire:ignore.self>
        <div class="modal-box">
            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="text-xl font-semibold text-gray-900 ">
                Editar Producto
            </h3>
            <!-- body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="POST" action="{{ route('EditProducto') }}">
                    @csrf
                    @if ($editProducto)
                        <div>
                            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 ">Nombre</label>
                            <input type="text" name="nombre" id="usuario" value="{{ $editProducto->nombre }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="marca" class="block mb-2 text-sm font-medium text-gray-900 ">Marca</label>
                            <input type="text" name="marca" id="marca" value="{{ $editProducto->marca }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="precio" class="block mb-2 text-sm font-medium text-gray-900 ">Precio</label>
                            <input type="text" name="precio" id="precio" value="{{ $editProducto->precio }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="stock" class="block mb-2 text-sm font-medium text-gray-900 ">Stock</label>
                            <input type="number" name="stock" id="stock" value="{{ $editProducto->stock }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <input type="hidden" name="id" value="{{ $editProducto->id }}">

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center d">
                            Guardar cambios
                        </button>
                    @endif
                </form>
            </div>

        </div>
    </dialog>

    {{-- edit modal ventas --}}
    <dialog id="my_modal_23" class="modal" wire:ignore.self>
        <div class="modal-box">
            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="text-xl font-semibold text-gray-900 ">
                Editar Venta
            </h3>
            <!-- body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="POST" action="{{ route('EditVentas') }}">
                    @csrf
                    @if ($editVenta)
                        <div>
                            <label for="categoria_producto" class="block mb-2 text-sm font-medium text-gray-900 ">
                                Producto
                            </label>
                            <select id="countries" name="producto_id" value="{{ $editVenta->producto_id }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  ">

                                @isset($editVenta)
                                    <option value="{{ $editVenta->producto_id }}">
                                        {{ $editVenta->producto->nombre }} {{ $editVenta->producto->marca }}
                                    </option>
                                @else
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
                                @endisset
                            </select>
                        </div>
                        <div>
                            <label for="cantidad"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" value="{{ $editVenta->cantidad }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="0" required />
                        </div>
                        <input type="hidden" name="id" value="{{ $editVenta->id }}">

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center d">
                            Guardar cambios
                        </button>
                    @endif
                </form>
            </div>

        </div>
    </dialog>

    {{-- edit modal egresos --}}
    <dialog id="my_modal_24" class="modal" wire:ignore.self>
        <div class="modal-box">
            <form method="dialog">
                <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
            </form>
            <h3 class="text-xl font-semibold text-gray-900 ">
                Editar Egreso
            </h3>
            <!-- body -->
            <div class="p-4 md:p-5">
                <form class="space-y-4" method="POST" action="{{ route('EditEgreso') }}">
                    @csrf
                    @if ($editEgreso)
                        <div>
                            <label for="proveedor"
                                class="block mb-2 text-sm font-medium text-gray-900 ">Proveedor</label>
                            <input type="text" name="proveedor" id="proveedor" value="{{ $editEgreso->proveedor }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <div>
                            <label for="monto" class="block mb-2 text-sm font-medium text-gray-900 ">Monto</label>
                            <input type="number" name="monto" id="monto" value="{{ $editEgreso->monto }}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " />
                        </div>
                        <input type="hidden" name="id" value="{{ $editEgreso->id }}">

                        <button type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center d">
                            Guardar cambios
                        </button>
                    @endif
                </form>
            </div>

        </div>
    </dialog>



    {{-- tabla --}}

    <div class="grid w-full grid-cols-1 gap-6 xl:grid-cols-2">
        <!-- Tabla de Usuarios -->
        <div class="container w-full p-4 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="py-2 mb-1 font-semibold text-gray-800 md:mb-4 text-md md:text-2xl">Tabla de usuarios</h2>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">ID
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Usuario</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Permisos</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($usuarios as $usuario)
                            <tr class="border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->id }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">{{ $usuario->usuario }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800">
                                    @foreach ($usuario->permisos as $permiso)
                                        {{ $permiso }}<br>
                                    @endforeach
                                </td>
                                <td class="px-6 py-4 text-sm">
                                    <button type="button" wire:click="delCaja({{ $usuario->id }})"
                                        wire:confirm="Estas seguro que desea eliminar esta caja"
                                        class="px-3 py-1 text-red-600 bg-red-100 rounded-md hover:bg-red-200">Eliminar</button>
                                    <button type="button" wire:click="editarCaja({{ $usuario->id }})"
                                        onclick="my_modal_1.showModal()"
                                        class="px-3 py-1 text-green-600 bg-green-100 rounded-md hover:bg-green-200">Editar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de Productos -->
        <div class="container w-full p-4 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="py-2 mb-1 font-semibold text-gray-800 md:mb-4 text-md md:text-2xl">Tabla de productos</h2>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">ID
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Nombre</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Precio</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Categoría</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Stock</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($productos))
                            @foreach ($productos as $producto)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $producto->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $producto->nombre }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $producto->precio }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $producto->categoria }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $producto->stock }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <button type="button" wire:click="delProducto({{ $producto->id }})"
                                            wire:confirm="Estas seguro que desea eliminar este producto"
                                            class="px-3 py-1 text-red-600 bg-red-100 rounded-md hover:bg-red-200">Eliminar</button>
                                        <button wire:click="editarProducto({{ $producto->id }})"
                                            onclick="my_modal_2.showModal()"
                                            class="px-3 py-1 text-green-600 bg-green-100 rounded-md hover:bg-green-200">Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de ventas -->
        <div class="container w-full p-4 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="py-2 mb-1 font-semibold text-gray-800 md:mb-4 text-md md:text-2xl">Tabla de ventas</h2>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">ID
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Producto</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Cantidad</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Total</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Fecha</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($ventas))
                            @foreach ($ventas as $venta)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $venta->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $venta->producto->nombre . ' ' . $venta->producto->marca }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $venta->cantidad }}</td>
                                    <td class="px-6 py-4 text-sm text-green-500">{{ $venta->total }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $venta->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        <button wire:click="editarVenta({{ $venta->id }})"
                                            onclick="my_modal_23.showModal()"
                                            class="px-3 py-1 text-green-600 bg-green-100 rounded-md hover:bg-green-200">Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Tabla de egresos -->
        <div class="container w-full p-4 mx-auto bg-white rounded-lg shadow-md">
            <h2 class="py-2 mb-1 font-semibold text-gray-800 md:mb-4 text-md md:text-2xl">Tabla de egresos</h2>
            <div class="w-full overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">ID
                            </th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Proveedor</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Monto</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Fecha</th>
                            <th class="px-6 py-3 text-xs font-semibold text-left text-gray-700 uppercase border-b">
                                Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($egresos))
                            @foreach ($egresos as $egreso)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $egreso->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">{{ $egreso->proveedor }}</td>
                                    <td class="px-6 py-4 text-sm text-red-600">{{ $egreso->monto }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-800">
                                        {{ $egreso->created_at->diffForHumans() }}
                                    </td>
                                    <td class="px-6 py-4 text-sm">
                                        <button wire:click="editarEgreso({{ $egreso->id }})"
                                            onclick="my_modal_24.showModal()"
                                            class="px-3 py-1 text-green-600 bg-green-100 rounded-md hover:bg-green-200">Editar</button>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<script>
    window.addEventListener('caja-eliminada', event => {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Caja eliminada con exito",
            showConfirmButton: false,
            timer: 1500
        });
    });
    window.addEventListener('caja-agregada', event => {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Caja creada con exito",
            showConfirmButton: false,
            timer: 1500
        });
    });
    window.addEventListener('datos-editados', event => {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Datos actualizados con exito",
            showConfirmButton: false,
            timer: 1500
        });
    });
    window.addEventListener('producto-eliminado', event => {
        Swal.fire({
            position: "center",
            icon: "success",
            title: "Producto eliminada con exito",
            showConfirmButton: false,
            timer: 1500
        });
    });
    window.addEventListener('modal-editar-caja', event => {
        const modal = document.getElementById('edit-caja-modal');
        modal.classList.toggle('hidden');
    });
</script>
