<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail; // 👈 Importamos la fachada Mail
use App\Mail\ContactMessageReceived; // 👈 Importamos tu nuevo Mailable

class ContactController extends Controller
{
    /**
     * Muestra la página de Contacto con el formulario limpio.
     */
    public function index()
    {
        return view('/layouts/contact');
    }

    /**
     * Procesa el envío del formulario de contacto (Petición POST).
     */
    public function send(Request $request)
    {
        // 1. Validamos los datos de entrada por seguridad informática
        $validatedData = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string|min:10',
        ]);

        // 2. Ejecutamos el envío a través del canal SMTP (Mailpit en local)
        // Sustituye 'tu-email@profesional.com' por la cuenta donde quieras recibir tus leads en producción
        Mail::to('info@tualbornoz.com')->send(new ContactMessageReceived($validatedData));

        // 3. Redireccionamos de vuelta enviando la sesión flash de éxito
        return back()->with('success', '¡Mensaje enviado con éxito! Me pondré en contacto contigo lo antes posible.');
    }
}