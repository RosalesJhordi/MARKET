<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IsabelMarket - @yield('titulo')</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" href="{{ asset('img/logo.png')}}" type="image/x-icon">


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- CSS de Flowbite -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">

<!-- JS de Flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>


</head>
<body class="flex flex-col justify-between xl:flex-row">
    <header class="flex justify-between w-full px-1 py-1 lg:py-4 lg:px-4 item-center xl:hidden">
        <div class="flex items-center justify-between w-full px-2 py-2.5 ">
            <div class="text-center ">
                <button class="font-medium text-gray-900 rounded-lg text-md focus:outline-none" type="button"
                    data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation"
                    aria-controls="drawer-navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                </button>
            </div>

            @auth
                {{ auth()->user()->usuario }}
                {{-- @foreach (auth()->user()->permisos as $permiso)
                    pp: {{ $permiso }}
                @endforeach --}}
            @endauth
        </div>

        <div id="drawer-navigation"
            class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-gray-900 w-80"
            tabindex="-1" aria-labelledby="drawer-navigation-label">
            <h5 id="drawer-navigation-label" class="text-base font-semibold text-gray-500 uppercase">Menu
            </h5>
            <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div class="py-4 overflow-y-auto">
                <div class="flex items-center justify-center w-full">
                    <img src="{{ asset('img/logo.png') }}" alt="Logo" class="py-4 mt-4 mb-4 text-4xl w-52 invert f">
                </div>
                <ul class="space-y-2 font-medium">
                    @foreach (auth()->user()->permisos as $permiso)
                        @if ($permiso == 'Administrador')
                            <a href="{{ route('/') }}"
                                class="flex items-center p-2 text-lg  rounded-md hover:bg-gray-100 hover:text-black
                                {{ Route::is('/') ? 'text-black bg-white' : 'text-white' }}">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 {{ Route::is('/') ? 'text-black' : 'text-gray-400 ' }} transition duration-75 group-hover:text-gray-900 "
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path
                                        d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                    <path
                                        d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                </svg>
                                <span class="ms-3">Inicio</span>
                            </a>
                        @endif
                    @endforeach

                    <a href="{{ route('Productos') }}"
                        class="flex items-center p-2 text-lg rounded-md hover:bg-gray-100 hover:text-black {{ Route::is('Productos') ? 'text-black bg-white' : 'text-white' }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 {{ Route::is('Productos') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3">Productos</span>
                    </a>

                    @foreach (auth()->user()->permisos as $permiso)
                        @if ($permiso == 'Administrador')
                            <a href="{{ route('Cajas') }}"
                                class="flex items-center p-2 text-lg {{ Route::is('Cajas') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 {{ Route::is('Cajas') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ms-3">Cajas</span>
                            </a>

                            <a href="{{ route('Movimientos') }}"
                                class="flex items-center p-2 text-lg {{ Route::is('Movimientos') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-5 h-5 {{ Route::is('Movimientos') ? 'text-black' : 'text-gray-400 ' }} transition duration-75 group-hover:text-gray-900 "
                                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                    <path fill-rule="evenodd"
                                        d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm4.5 7.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0V12Zm2.25-3a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0V9.75A.75.75 0 0 1 13.5 9Zm3.75-1.5a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0v-9Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ms-3">Movimientos</span>
                            </a>
                        @endif
                    @endforeach

                    <a href="{{ route('Ventas') }}"
                        class="flex items-center p-2 text-lg {{ Route::is('Ventas') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 {{ Route::is('Ventas') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                        </svg>
                        <span class="ms-3">Ventas</span>
                    </a>

                    <a href="{{ route('logout') }}"
                        class="flex items-center p-2 text-lg text-white rounded-md hover:bg-gray-100 hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 text-gray-400 transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3">Salir</span>
                    </a>
                </ul>
            </div>
        </div>
    </header>
    <aside style="width: 18%;" class="sticky top-0 flex-col hidden h-screen bg-gray-900 xl:flex shadown-md">
        <div class="flex items-center justify-center w-full">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" class="py-4 mt-4 mb-4 text-4xl w-52 invert f">
        </div>
        <div class="flex flex-col gap-2 px-4 py-20">

            @foreach (auth()->user()->permisos as $permiso)
                @if ($permiso == 'Administrador')
                    <a href="{{ route('/') }}"
                        class="flex items-center p-2 text-lg  rounded-md hover:bg-gray-100 hover:text-black
                        {{ Route::is('/') ? 'text-black bg-white' : 'text-white' }}">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 {{ Route::is('/') ? 'text-black' : 'text-gray-400 ' }} transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path
                                d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                            <path
                                d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                        </svg>
                        <span class="ms-3">Inicio</span>
                    </a>
                @endif
            @endforeach

            <a href="{{ route('Productos') }}"
                class="flex items-center p-2 text-lg rounded-md hover:bg-gray-100 hover:text-black {{ Route::is('Productos') ? 'text-black bg-white' : 'text-white' }}">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 {{ Route::is('Productos') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M7.5 6v.75H5.513c-.96 0-1.764.724-1.865 1.679l-1.263 12A1.875 1.875 0 0 0 4.25 22.5h15.5a1.875 1.875 0 0 0 1.865-2.071l-1.263-12a1.875 1.875 0 0 0-1.865-1.679H16.5V6a4.5 4.5 0 1 0-9 0ZM12 3a3 3 0 0 0-3 3v.75h6V6a3 3 0 0 0-3-3Zm-3 8.25a3 3 0 1 0 6 0v-.75a.75.75 0 0 1 1.5 0v.75a4.5 4.5 0 1 1-9 0v-.75a.75.75 0 0 1 1.5 0v.75Z"
                        clip-rule="evenodd" />
                </svg>
                <span class="ms-3">Productos</span>
            </a>

            @foreach (auth()->user()->permisos as $permiso)
                @if ($permiso == 'Administrador')
                    <a href="{{ route('Cajas') }}"
                        class="flex items-center p-2 text-lg {{ Route::is('Cajas') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 {{ Route::is('Cajas') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M2.25 5.25a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3V15a3 3 0 0 1-3 3h-3v.257c0 .597.237 1.17.659 1.591l.621.622a.75.75 0 0 1-.53 1.28h-9a.75.75 0 0 1-.53-1.28l.621-.622a2.25 2.25 0 0 0 .659-1.59V18h-3a3 3 0 0 1-3-3V5.25Zm1.5 0v7.5a1.5 1.5 0 0 0 1.5 1.5h13.5a1.5 1.5 0 0 0 1.5-1.5v-7.5a1.5 1.5 0 0 0-1.5-1.5H5.25a1.5 1.5 0 0 0-1.5 1.5Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3">Cajas</span>
                    </a>

                    <a href="{{ route('Movimientos') }}"
                        class="flex items-center p-2 text-lg {{ Route::is('Movimientos') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-5 h-5 {{ Route::is('Movimientos') ? 'text-black' : 'text-gray-400 ' }} transition duration-75 group-hover:text-gray-900 "
                            viewBox="0 0 24 24" fill="currentColor" class="size-6">
                            <path fill-rule="evenodd"
                                d="M3 6a3 3 0 0 1 3-3h12a3 3 0 0 1 3 3v12a3 3 0 0 1-3 3H6a3 3 0 0 1-3-3V6Zm4.5 7.5a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0v-2.25a.75.75 0 0 1 .75-.75Zm3.75-1.5a.75.75 0 0 0-1.5 0v4.5a.75.75 0 0 0 1.5 0V12Zm2.25-3a.75.75 0 0 1 .75.75v6.75a.75.75 0 0 1-1.5 0V9.75A.75.75 0 0 1 13.5 9Zm3.75-1.5a.75.75 0 0 0-1.5 0v9a.75.75 0 0 0 1.5 0v-9Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ms-3">Movimientos</span>
                    </a>
                @endif
            @endforeach

            <a href="{{ route('Ventas') }}"
                class="flex items-center p-2 text-lg {{ Route::is('Ventas') ? 'text-black bg-white' : 'text-white' }} rounded-md hover:bg-gray-100 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 {{ Route::is('Ventas') ? 'text-black' : 'text-gray-400 ' }}  transition duration-75 group-hover:text-gray-900 "
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path
                        d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                </svg>
                <span class="ms-3">Ventas</span>
            </a>

            <a href="{{ route('logout') }}"
                class="flex items-center p-2 text-lg text-white rounded-md hover:bg-gray-100 hover:text-black">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-5 h-5 text-gray-400 transition duration-75 group-hover:text-gray-900 "
                    viewBox="0 0 24 24" fill="currentColor" class="size-6">
                    <path fill-rule="evenodd"
                        d="M7.5 3.75A1.5 1.5 0 0 0 6 5.25v13.5a1.5 1.5 0 0 0 1.5 1.5h6a1.5 1.5 0 0 0 1.5-1.5V15a.75.75 0 0 1 1.5 0v3.75a3 3 0 0 1-3 3h-6a3 3 0 0 1-3-3V5.25a3 3 0 0 1 3-3h6a3 3 0 0 1 3 3V9A.75.75 0 0 1 15 9V5.25a1.5 1.5 0 0 0-1.5-1.5h-6Zm5.03 4.72a.75.75 0 0 1 0 1.06l-1.72 1.72h10.94a.75.75 0 0 1 0 1.5H10.81l1.72 1.72a.75.75 0 1 1-1.06 1.06l-3-3a.75.75 0 0 1 0-1.06l3-3a.75.75 0 0 1 1.06 0Z"
                        clip-rule="evenodd" />
                </svg>
                <span class="ms-3">Salir</span>
            </a>
        </div>
    </aside>
    <main class="w-full xl:w-[82%]">
        @yield('contenido')
    </main>

    <button class="fixed bottom-1 right-1" onclick="my_modal_3.showModal()">
        <img src="{{ asset('img/bot.png') }}" alt="bot" class="w-20">
    </button>

    <dialog id="my_modal_3" class="modal">
        <div class="max-w-2xl h-1/2 w-11/10 modal-box">
          <form method="dialog">
            <button class="absolute btn btn-sm btn-circle btn-ghost right-2 top-2">✕</button>
          </form>
          <h3 class="text-lg font-bold">IsabelBot</h3>
          @livewire('bot')
        </div>
      </dialog>
</body>
</html>
