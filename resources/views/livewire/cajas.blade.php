<div class="w-full px-4 py-2 xl:py-4 xl:px-4">
    <h1 class="py-2 font-semibold text-md md:text-2xl">
        Cajas
    </h1>
    <div class="grid grid-cols-2 gap-2 md:grid-cols-3 lg:gap-5 xl:grid-cols-5">
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
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-white md:w-8 md:h-8" fill="none"
                            viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
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
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
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
    <div class="relative py-2 mt-3 overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 ">
            <thead class="text-xs text-gray-700 uppercase bg-green-200 ">
                <tr>
                    <th scope="col" class="px-6 py-3">Usuario</th>
                    <th scope="col" class="px-6 py-3">Permisos</th>
                    <th scope="col" class="px-6 py-3">Fecha de Creación</th>
                    <th scope="col" class="px-6 py-3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cajas as $caja)
                    <tr class="bg-white border-b ">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                            {{ $caja->usuario }}
                        </td>
                        <td class="px-6 py-4">
                            @foreach ($caja->permisos as $permiso)
                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded ">
                                    {{ $permiso }}
                                </span>
                            @endforeach
                        </td>
                        <td class="px-6 py-4">
                            {{ $caja->created_at->format('d/m/Y') }}
                        </td>
                        <td class="px-6 py-4 text-sm">
                            <button type="button" wire:click="delCaja({{ $caja->id }})"
                                wire:confirm="Estas seguro que desea eliminar esta caja"
                                class="px-3 py-1 text-red-600 bg-red-100 rounded-md hover:bg-red-200">Eliminar</button>
                            <button type="button" wire:click="editarCaja({{ $caja->id }})"
                                onclick="my_modal_1.showModal()"
                                class="px-3 py-1 text-green-600 bg-green-100 rounded-md hover:bg-green-200">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
