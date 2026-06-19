<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    // Propiedad pública para que esté disponible automáticamente en la vista Blade del correo
    public $formData;

    public function __construct($formData)
    {
        $this->formData = $formData;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Nuevo mensaje de contacto: ' . $this->formData['name'],
            replyTo: $this->formData['email'] // Permite responder directamente al cliente desde el mail
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact', // Ruta de la vista de la plantilla
        );
    }
}