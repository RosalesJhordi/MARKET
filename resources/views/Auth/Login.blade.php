<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IsabelMarket - Login</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/izitoast/dist/css/iziToast.min.css">
    <script src="https://cdn.jsdelivr.net/npm/izitoast/dist/js/iziToast.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.14/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>


    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- CSS de Flowbite -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet">

<!-- JS de Flowbite -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-md">

        <div class="flex justify-center">
            <img src="{{ asset('img/logo.png') }}"
                alt="Login" class="w-24 h-24 ">
        </div>

        <h2 class="text-2xl font-bold text-center text-gray-900">Iniciar sesión</h2>

        @if (session('error'))
            <div class="p-1 text-sm font-semibold text-center text-white bg-red-500 rounded-sm">{{ session('error') }}
            </div>
        @endif

        <form class="space-y-3 action="{{ route('login.post') }}" method="POST" novalidate>
            @csrf
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Usuario</label>
                <input type="text" id="username" name="usuario" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            @error('usuario')
                <div class="p-1 text-sm font-semibold text-center text-white bg-red-500 rounded-sm">{{ $message }}
                </div>
            @enderror

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Contraseña</label>
                <input type="password" id="password" name="password" required
                    class="w-full p-3 mt-1 border border-gray-300 rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            @error('password')
                <div class="p-1 text-sm font-semibold text-center text-white bg-red-500 rounded-sm">{{ $message }}
                </div>
            @enderror

            <button type="submit"
                class="w-full px-4 py-2 text-white bg-indigo-600 rounded-lg hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-500">
                Iniciar sesión
            </button>
        </form>
    </div>

    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

</html>
