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

        // Respuestas a saludos
        if (preg_match('/hola|buenos días|buenas tardes|buenas noches|qué tal|cómo estás|saludos|qué hay|hey|¿qué pasa?/', $message)) {
            $responseMessage = '¡Hola!, Soy IsabelBot, tu asistente. ¿En qué puedo ayudarte hoy? Puedes preguntar sobre productos o precios.';

        } elseif (preg_match('/adiós|hasta luego|chao|nos vemos|cuídate|hasta pronto|me despido/', $message)) {
            $responseMessage = '¡Hasta luego! Si tienes más preguntas, no dudes en regresar.';

        // Consultas sobre el bot
        } elseif (preg_match('/quién eres|qué eres|qué haces|tu nombre|cómo te llamas|preséntate/', $message)) {
            $responseMessage = 'Soy IsabelBot, tu asistente virtual, creada para ayudarte con información sobre productos, precios, y más.';

        } elseif (preg_match('/qué puedes hacer|que haces|que puedes hacer|en qué puedes ayudarme|qué sabes hacer|cuáles son tus funciones/', $message)) {
            $responseMessage = 'Puedo ayudarte con información sobre nuestros productos, precios, stock disponible, y mucho más. Pregunta lo que necesites.';

        // Información general
        } elseif (preg_match('/cuál es el horario de atención|horario de apertura|horario de atención al cliente|horario de servicio/', $message)) {
            $responseMessage = 'Nuestro horario de atención es de lunes a viernes de 9:00 a.m. a 6:00 p.m. ¿Hay algo en particular que necesites saber?';

        } elseif (preg_match('/tienes promociones|ofertas|descuentos|rebajas|hay alguna oferta|hay promociones/', $message)) {
            $responseMessage = '¡Claro! Tenemos varias promociones vigentes. Pregúntame por el precio de algún producto y te diré si hay alguna oferta especial.';

        } elseif (preg_match('/dónde están ubicados|dirección|dónde se encuentran|dónde los puedo encontrar/', $message)) {
            $responseMessage = 'Nos encontramos en la Av. Principal #123, Ciudad. ¡Visítanos para más detalles o realizar alguna compra!';

        } elseif (preg_match('/envíos a domicilio|realizan envíos|envíos|disponen de envío|hacen entregas/', $message)) {
            $responseMessage = 'Sí, realizamos envíos a domicilio. Consulta con nosotros los detalles según tu ubicación.';

        } elseif (preg_match('/métodos de pago|cómo puedo pagar|formas de pago|qué opciones de pago tienen/', $message)) {
            $responseMessage = 'Aceptamos pagos con tarjeta, transferencia bancaria, y efectivo. ¿Te gustaría saber más sobre alguno de ellos?';

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

        // Respuestas adicionales
        } elseif (preg_match('/ayuda|asistencia|necesito ayuda|necesito asistencia|me puedes ayudar|me echas una mano/', $message)) {
            $responseMessage = '¡Claro! Estoy aquí para ayudarte. ¿Qué necesitas saber?';

        } elseif (preg_match('/preguntas frecuentes|faq|dudas|consultas|preguntas comunes/', $message)) {
            $responseMessage = '¿Tienes alguna duda? Aquí algunas preguntas frecuentes:
            - ¿Cuál es el horario de atención?
            - ¿Qué métodos de pago aceptan?
            - ¿Hacen envíos a domicilio?';

        } elseif (preg_match('/puedo hacer una devolución|política de devoluciones|devoluciones|cambio de producto/', $message)) {
            $responseMessage = 'Sí, tenemos una política de devoluciones. Si el producto no es lo que esperabas, puedes devolverlo dentro de los 30 días posteriores a la compra.';

        } elseif (preg_match('/tienes garantía|política de garantía|garantía|ofrecen garantía/', $message)) {
            $responseMessage = 'Todos nuestros productos tienen garantía de fábrica. Puedes consultar los detalles en el ticket de compra.';

        } elseif (preg_match('/recomendaciones|sugerencias|qué me recomiendas|dame una sugerencia|qué producto me aconsejas/', $message)) {
            $responseMessage = 'Claro, puedo recomendarte productos. ¿Qué tipo de producto estás buscando?';

        } elseif (preg_match('/contactar|hablar con un asesor|necesito hablar con alguien|quiero hablar con un humano|con quién puedo hablar/', $message)) {
            $responseMessage = 'Para hablar con un asesor, puedes llamar al 123-456-789. Ellos estarán encantados de ayudarte.';

        } elseif (preg_match('/métodos de envío|opciones de envío|cómo se realizan los envíos|formas de envío|cómo entregan/', $message)) {
            $responseMessage = 'Realizamos envíos a través de varias empresas de mensajería. Elige la que prefieras durante el proceso de pago.';

        } elseif (preg_match('/tienes algo más que ofrecer|qué más puedes hacer|tienes más productos|qué más hay|tienes otras opciones/', $message)) {
            $responseMessage = 'Contamos con una amplia gama de productos en diferentes categorías. ¡Pregunta por cualquier cosa que te interese!';

        } elseif (preg_match('/no entiendo|no sé|no comprendo|no lo entiendo|no me queda claro/', $message)) {
            $responseMessage = 'Lo siento si no fui claro. Por favor, intenta formular tu pregunta de otra manera. Estoy aquí para ayudarte.';

        } elseif (preg_match('/cuál es el producto más vendido|mejores productos|productos populares|lo que más venden|productos más solicitados/', $message)) {
            $responseMessage = 'Nuestros productos más vendidos son los que tienen mejor aceptación. ¿Te gustaría saber cuáles son?';

        } elseif (preg_match('/cuáles son las novedades|nuevos productos|últimos lanzamientos|lo más nuevo|qué hay de nuevo/', $message)) {
            $responseMessage = 'Contamos con novedades regularmente. Pregúntame por los últimos productos que hemos añadido a nuestro catálogo.';

        } elseif (preg_match('/tienes algún consejo|qué me recomiendas|puedes aconsejarme|consejos para comprar|consejos de compra/', $message)) {
            $responseMessage = 'Te recomendaría siempre verificar las especificaciones y leer opiniones de otros clientes. ¿Tienes un producto en mente?';

        } elseif (preg_match('/me interesa|quiero saber más|me gustaría|puedes contarme|dame más información/', $message)) {
            $responseMessage = 'Por supuesto, estaré encantada de darte más información. ¿Sobre qué producto o tema te gustaría saber?';

        } else {
            $responseMessage = 'Lo siento, no entendí tu pregunta. ¿Podrías intentar reformularla o hacerme otra pregunta?';
        }

        $this->botResponse[] = ['from' => 'bot', 'message' => $responseMessage];

        // Limpiar el mensaje del usuario
        $this->userMessage = '';
    }

    public function render()
    {
        return view('livewire.bot');
    }
}
