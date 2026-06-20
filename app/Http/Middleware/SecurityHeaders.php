<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SecurityHeaders
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        // 1. Evita que tu web sea metida en un <iframe> (Mitiga Clickjacking)
        $response->headers->set('X-Frame-Options', 'DENY');

        // 2. Fuerza al navegador a respetar los tipos MIME (Mitiga ataques XSS por archivos)
        $response->headers->set('X-Content-Type-Options', 'nosniff');

        // 3. Controla cuánta información de origen se envía al pinchar en enlaces externos
        $response->headers->set('Referrer-Policy', 'strict-origin-when-cross-origin');

        // 4. Fuerza HTTPS estricto durante un año (HSTS) - Solo si tienes SSL activo
        $response->headers->set('Strict-Transport-Security', 'max-age=31536000; includeSubDomains; preload');

        return $response;
    }
}