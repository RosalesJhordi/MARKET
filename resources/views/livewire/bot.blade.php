<div class="w-full">

    <!-- Contenedor de mensajes -->
    <div class="p-2 mb-4 overflow-y-auto bg-white rounded-md shadow-inner h-96" style="display: flex; flex-direction: column-reverse;">
        @foreach (array_reverse($botResponse) as $index => $response)
            <div class="flex {{ $response['from'] === 'user' ? 'justify-end' : 'justify-start' }} mb-2">
                <div class="max-w-xs {{ $response['from'] === 'user' ? 'bg-green-200 text-right' : 'bg-gray-200 text-left' }} p-2 rounded-lg">
                    <p class="text-sm">{{ $response['message'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Entrada de mensaje del usuario -->
    <div class="flex items-center">
        <input
            type="text"
            wire:model="userMessage"
            wire:keydown.enter="sendMessage"
            placeholder="Escribe tu mensaje..."
            class="flex-grow p-2 border rounded-l focus:outline-none focus:border-blue-400"
        />
        <button
            wire:click="sendMessage"
            class="p-2 text-white bg-blue-500 rounded-r hover:bg-blue-600"
        >
            Enviar
        </button>
    </div>
</div>
