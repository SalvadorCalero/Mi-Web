@extends('layouts.app')

@section('title', 'Política de Cookies')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4 sm:px-6">
    <!-- Encabezado de Página -->
    <header class="mb-12 border-b border-stone-200 pb-6">
        <h1 class="font-titulos font-bold text-3xl sm:text-4xl text-textoPrincipal tracking-tight mb-2">Política de Cookies</h1>
        <p class="text-xs text-stone-400 font-medium uppercase tracking-wider">Última actualización: {{ date('d/m/Y') }}</p>
    </header>

    <!-- Contenedor con espaciado modular -->
    <div class="space-y-10 text-sm text-textoCuerpo leading-relaxed font-fuentePrincipal">
        
        <!-- Introducción -->
        <section class="border-l-2 border-stone-800 pl-4 py-1 bg-stone-50/50 rounded-r-lg">
            <h2 class="font-titulos font-bold text-sm uppercase tracking-wider text-textoPrincipal mb-1">Uso de Cookies en el Sitio Web</h2>
            <p class="text-stone-500 italic text-xs">Garantizando una navegación transparente, amigable y segura.</p>
        </section>

        <!-- ¿Qué son las cookies? -->
        <section class="space-y-3">
            <p>
                El acceso a este Sitio Web puede implicar la utilización de cookies. Las <span class="font-medium text-textoPrincipal">cookies</span> son pequeñas cantidades de información que se almacenan en el navegador utilizado por cada Usuario —en los distintos dispositivos que pueda utilizar para navegar— para que el servidor recuerde cierta información que posteriormente y únicamente el servidor que la implementó leerá. Las cookies facilitan la navegación, la hacen más amigable, y no dañan el dispositivo de navegación.
            </p>
            <p>
                Son procedimientos automáticos de recogida de información relativa a las preferencias determinadas por el Usuario durante su visita al Sitio Web con el fin de reconocerlo, personalizar su experiencia y, por ejemplo, ayudar a identificar y resolver errores.
            </p>
            <p>
                La información recabada puede incluir la fecha y hora de visitas, las páginas visionadas, el tiempo de permanencia y los sitios visitados justo antes y después del mismo. Sin embargo, <span class="font-semibold text-textoPrincipal">ninguna cookie permite extraer información del disco duro</span> ni robar información personal por sí misma.
            </p>
            <p class="bg-stone-50 border border-stone-200 p-4 rounded-xl text-xs text-stone-600">
                <span class="font-semibold text-textoPrincipal block mb-1">Tratamiento de datos personales:</span> Las cookies que permiten identificar a una persona se consideran datos personales. Por tanto, les será de aplicación la Política de Privacidad y su utilización requerirá siempre un consentimiento del Usuario basado en una elección auténtica, ofrecido mediante una decisión afirmativa y positiva.
            </p>
        </section>

        <!-- Tipos de Cookies -->
        <section class="space-y-6">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Tipos de Cookies Utilizadas</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Propias -->
                <div class="bg-white border border-stone-200 rounded-xl p-5 shadow-xs">
                    <h3 class="font-titulos font-semibold text-base text-textoPrincipal mb-2 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-stone-800"></span>
                        Cookies Propias
                    </h3>
                    <p class="text-xs text-stone-600">
                        Son aquellas que se envían al ordenador o dispositivo del Usuario y son gestionadas exclusivamente por <span class="font-medium text-textoPrincipal">[Pendiente]</span> para el mejor funcionamiento del Sitio Web, mejorando la calidad del contenido y reconociendo al visitante recurrente.
                    </p>
                </div>

                <!-- De terceros -->
                <div class="bg-white border border-stone-200 rounded-xl p-5 shadow-xs">
                    <h3 class="font-titulos font-semibold text-base text-textoPrincipal mb-2 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-stone-400"></span>
                        Cookies de Terceros
                    </h3>
                    <p class="text-xs text-stone-600">
                        Utilizadas y gestionadas por entidades externas para proporcionarnos servicios estadísticos y de análisis de navegación. Miden de forma completamente anónima el número de visitas, idioma, permanencia y tipo de navegador para optimizar nuestra calidad técnica.
                    </p>
                </div>
            </div>

            <!-- Enlace a Google -->
            <div class="text-xs bg-stone-50/60 border border-stone-200/60 rounded-xl p-4 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-2">
                <p class="text-stone-600">Para conocer la descripción, expiración y detalles de privacidad de nuestro proveedor de analítica:</p>
                <a href="https://policies.google.com/technologies/cookies" target="_blank" rel="noopener noreferrer" class="font-medium text-botonEnlace hover:underline inline-flex items-center gap-1 shrink-0">
                    Ver Cookies de Google Inc. ↗
                </a>
            </div>
        </section>

        <!-- Cookies de Redes Sociales -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Cookies de Redes Sociales</h2>
            <p class="mb-4">
                <span class="font-medium text-textoPrincipal">[Pendiente]</span> incorpora plugins de redes sociales que pueden almacenar cookies en su navegador. Dichos titulares disponen de sus propias políticas de privacidad y gestión de rastreadores, de las cuales son soberanos. A título informativo, facilitamos los accesos oficiales correspondientes:
            </p>

            <!-- Lista Limpia de Enlaces a RRSS -->
            <div class="bg-white border border-stone-200 rounded-xl overflow-hidden shadow-xs">
                <ul class="divide-y divide-stone-100 text-xs font-medium">
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">Facebook</span>
                        <a href="https://www.facebook.com/policies/cookies/" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver política de cookies ↗</a>
                    </li>
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">X / Twitter</span>
                        <a href="https://twitter.com/es/privacy" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver política de privacidad ↗</a>
                    </li>
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">Instagram</span>
                        <a href="https://help.instagram.com/1896641480634370" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver centro de ayuda ↗</a>
                    </li>
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">YouTube</span>
                        <a href="https://policies.google.com/privacy?hl=es" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver términos de Google ↗</a>
                    </li>
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">Pinterest</span>
                        <a href="https://policy.pinterest.com/es/privacy-policy" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver directrices ↗</a>
                    </li>
                    <li class="p-3 flex justify-between items-center hover:bg-stone-50 transition-colors">
                        <span class="text-textoPrincipal">LinkedIn</span>
                        <a href="https://www.linkedin.com/legal/cookie-policy" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">Ver uso de rastreadores ↗</a>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Deshabilitar cookies -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">Deshabilitar, Rechazar y Eliminar Cookies</h2>
            <p class="mb-4">
                El Usuario puede deshabilitar, rechazar y eliminar las cookies —total o parcialmente— instaladas en su dispositivo mediante la <span class="font-semibold text-textoPrincipal">configuración de su navegador de Internet</span> (Chrome, Firefox, Safari, Edge, Opera, etc.). Como los procedimientos difieren entre herramientas, se recomienda acudir directamente a las secciones de ayuda e instrucciones provistas por su desarrollador actual.
            </p>
            <p>
                En el supuesto de que se rechace el uso de cookies, el Usuario podrá continuar navegando a través del Sitio Web, si bien la utilización de algunas de las prestaciones o la personalización de las interfaces podría verse limitada.
            </p>
        </section>

    </div>
</div>
@endsection