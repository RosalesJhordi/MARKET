<?php

namespace App\Livewire;

use App\Models\Productos;
use Livewire\Component;

class Bot extends Component
{
    public $userMessage;
    public $botResponse = [];

    public function sendMessage()
    {
        if (empty($this->userMessage)) {
            return;
        }

        $message = strtolower($this->userMessage);

        $this->botResponse[] = ['from' => 'user', 'message' => $this->userMessage];

        if (preg_match('/hola|buenos días|buenas tardes|buenas noches|qué tal|cómo estás/', $message)) {
            $responseMessage = '¡Hola!, Soy IsabelBot, tu asistente. ¿En qué puedo ayudarte hoy? Puedes preguntar sobre productos o precios.';

        } elseif (preg_match('/adiós|hasta luego|chao|nos vemos/', $message)) {
            $responseMessage = '¡Hasta luego! Si tienes más preguntas, no dudes en regresar.';

        } elseif (preg_match('/precio de ([\w\s]+) ([\w\s]+)/', $message, $matches)) {
            $nombreProducto = trim($matches[1]);
            $marcaProducto = trim($matches[2]);
            $producto = Productos::where('nombre', 'like', '%'.$nombreProducto.'%')
                ->where('marca', 'like', '%'.$marcaProducto.'%')
                ->first();

            $responseMessage = $producto
                ? "El precio de {$producto->nombre} {$producto->marca} es: S/. {$producto->precio}. Si necesitas más información sobre otros productos, ¡pregunta sin dudarlo!"
                : 'No encontré ese producto con la marca especificada. Por favor, verifica los detalles o intenta con otro producto.';

        } elseif (preg_match('/cantidad de ([\w\s]+) ([\w\s]+)/', $message, $matches)) {
            $nombreProducto = trim($matches[1]);
            $marcaProducto = trim($matches[2]);
            $producto = Productos::where('nombre', 'like', '%'.$nombreProducto.'%')
                ->where('marca', 'like', '%'.$marcaProducto.'%')
                ->first();

            $responseMessage = $producto
                ? "La cantidad en stock de {$producto->nombre} {$producto->marca} es: {$producto->stock}. Si quieres saber más, pregúntame."
                : 'Lo siento, no encontré ese producto con la marca especificada. Puedes intentar con otro nombre o marca.';

        } elseif (preg_match('/productos en la categoría ([\w\s]+)/', $message, $matches)) {
            $categoria = trim($matches[1]);
            $productos = Productos::where('categoria', 'like', '%'.$categoria.'%')->get();

            if ($productos->isEmpty()) {
                $responseMessage = 'Lo siento, no encontré productos en esa categoría. ¿Quizás quieras probar con otra categoría?';
            } else {
                $listaProductos = $productos->pluck('nombre')->join(', ');
                $responseMessage = "En la categoría '$categoria' tenemos los siguientes productos: $listaProductos. ¿Te gustaría saber más sobre alguno de ellos?";
            }

        } else {
            $responseMessage = "No entendí tu mensaje. Aquí tienes algunas sugerencias:
            - Pregunta por 'precio de [producto] [marca]'.
            - Pregunta por 'cantidad de [producto] [marca]'.
            - Consulta 'productos en la categoría [nombre de categoría]'.
            - Salúdame con un 'hola' o 'buenos días'.";
        }

        $this->botResponse[] = ['from' => 'bot', 'message' => $responseMessage];

        $this->userMessage = '';
    }
    public function render()
    {
        return view('livewire.bot');
    }
}
