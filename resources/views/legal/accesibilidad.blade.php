@extends('layouts.app')

@section('title', 'Declaración de Accesibilidad')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4 sm:px-6">
    <!-- Encabezado de Página -->
    <header class="mb-12 border-b border-stone-200 pb-6">
        <h1 class="font-titulos font-bold text-3xl sm:text-4xl text-textoPrincipal tracking-tight mb-2">Declaración de Accesibilidad</h1>
        <p class="text-xs text-stone-400 font-medium uppercase tracking-wider">Última actualización: 21/06/2026</p>
    </header>

    <!-- Contenedor con espaciado modular -->
    <div class="space-y-10 text-sm text-textoCuerpo leading-relaxed font-fuentePrincipal">
        
        <!-- Bloque de Identificación -->
        <section class="border-l-2 border-stone-800 pl-4 py-1 bg-stone-50/50 rounded-r-lg">
            <h2 class="font-titulos font-bold text-sm uppercase tracking-wider text-textoPrincipal mb-1">[Pendiente]</h2>
            <p class="text-stone-500 italic text-xs">Compromiso con el acceso universal a los contenidos web.</p>
        </section>

        <!-- Situación de Cumplimiento -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">Situación de Cumplimiento</h2>
            <p>
                <span class="font-medium text-textoPrincipal">[Pendiente]</span> (en adelante, también Sitio Web) es <span class="font-medium text-textoPrincipal">parcialmente conforme</span> con el Real Decreto 1112/2018, de 7 de septiembre, debido a la falta de conformidad de los aspectos que se indican a continuación.
            </p>
        </section>

        <!-- Contenido No Accesible -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Contenido No Accesible</h2>
            <p>El contenido que se recoge a continuación no es accesible por los siguientes motivos:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2">
                <div class="bg-white border border-stone-200 rounded-xl p-4 shadow-xs">
                    <h3 class="font-bold text-xs uppercase tracking-wider text-stone-400 mb-2">a. Falta de conformidad</h3>
                    <p class="text-xs text-stone-600">No aplica. Cumple el 100% de los criterios de accesibilidad web.</p>
                </div>
                <div class="bg-white border border-stone-200 rounded-xl p-4 shadow-xs">
                    <h3 class="font-bold text-xs uppercase tracking-wider text-stone-400 mb-2">b. Carga desproporcionada</h3>
                    <p class="text-xs text-stone-600">No aplica.</p>
                </div>
                <div class="bg-white border border-stone-200 rounded-xl p-4 shadow-xs">
                    <h3 class="font-bold text-xs uppercase tracking-wider text-stone-400 mb-2">c. Ámbito de legislación</h3>
                    <p class="text-xs text-stone-600">Excepciones aplicables al entorno digital.</p>
                </div>
            </div>

            <div class="bg-stone-50 border border-stone-200/60 rounded-xl p-5 text-xs text-stone-600 space-y-2">
                <p>• Pueden existir archivos de ofimática en PDF y otros formatos publicados antes del 20 de septiembre de 2018 que no cumplan en su totalidad todos los requisitos.</p>
                <p>• Puede haber contenidos de terceros que no estén desarrollados en esta Unidad ni bajo su control (imágenes, mapas interactivos, vídeos, documentos, etc.).</p>
                <p>• Pueden existir archivos pregrabados publicados antes del 20 de septiembre de 2018 que no cumplan los requisitos en su totalidad.</p>
                <p>• Debido al uso de gestores de contenido (CMS), ciertas actualizaciones o cambios en los sistemas podrían provocar desajustes temporales en el contenido autogenerado.</p>
            </div>
        </section>

        <!-- Preparación de la Declaración -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">Preparación de la presente Declaración</h2>
            <p class="mb-3">
                La presente declaración fue preparada el día <span class="font-medium text-textoPrincipal">21/06/2026</span>. El método empleado para preparar la declaración ha sido una <span class="font-medium text-textoPrincipal">autoevaluación</span> llevada a cabo por la propia empresa.
            </p>
            <p class="text-xs text-stone-400 font-medium">Última revisión de la declaración: 21/06/2026</p>
        </section>

        <!-- Observaciones y Datos de Contacto -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Observaciones y Datos de Contacto</h2>
            <p>
                Puede realizar comunicaciones sobre requisitos de accesibilidad (artículo 10.2.a del Real Decreto 1112/2018), tales como informar sobre posibles incumplimientos, transmitir dificultades de acceso o formular sugerencias a través de las siguientes vías:
            </p>

            <!-- Ficha de contacto técnico -->
            <div class="bg-white border border-stone-200 rounded-xl p-5 shadow-xs max-w-xl">
                <dl class="grid grid-cols-1 gap-y-3 sm:grid-cols-3 sm:gap-x-4">
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Vía de Correo</dt>
                    <dd class="text-sm font-medium text-botonEnlace sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Vía Telefónica</dt>
                    <dd class="text-sm font-medium text-textoPrincipal sm:col-span-2">[Pendiente]</dd>
                </dl>
            </div>

            <div class="pt-2">
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-2">Reclamaciones y Solicitudes Adicionales</h3>
                <p class="mb-3">
                    Acorde al artículo 10.2.b del RD 1112/2018, también se pueden presentar quejas relativas al cumplimiento de los requisitos o solicitudes de información accesible sobre contenidos excluidos o exentos por carga desproporcionada.
                </p>
                <p class="text-stone-600 bg-stone-50 border-l-2 border-stone-300 p-3 rounded-r-lg text-xs">
                    <span class="font-semibold text-textoPrincipal block mb-1">Nota legal:</span> En la Solicitud de información accesible, se debe concretar, con toda claridad, los hechos, razones y petición que permitan constatar que se trata de una solicitud razonable y legítima. Las comunicaciones serán recibidas y tratadas por la dirección de la empresa.
                </p>
            </div>
        </section>

        <!-- Contenido Opcional -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Contenido Opcional</h2>
            <p>
                La versión actualmente visible de este sitio web es del día <span class="font-medium text-textoPrincipal">21/06/2026</span>. A partir de dicha fecha se llevan a cabo revisiones parciales diarias del contenido web nuevo o modificado para asegurar el cumplimiento de la <span class="font-medium text-textoPrincipal">Norma UNE-EN 301549:2022</span>.
            </p>
            <p class="font-medium text-textoPrincipal text-sm pt-1">Medidas adoptadas para facilitar la accesibilidad:</p>
            <ul class="space-y-2 pl-5 list-disc marker:text-stone-400 text-stone-600 text-xs">
                <li>Utilización de texto alternativo descriptivo en las imágenes.</li>
                <li>Los enlaces ofrecen detalles claros acerca de la función o el destino del hipervínculo.</li>
                <li>Uso de los estándares semánticos del W3C: XHTML 1.0, CSS 3.0, WAI AA.</li>
            </ul>
        </section>

        <!-- Compatibilidad -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Compatibilidad Técnica</h2>
            <p>El sitio web:</p>
            <ul class="space-y-2 pl-5 list-disc marker:text-stone-400">
                <li>Se ha diseñado cumpliendo con las pautas de prioridad 2 (<span class="font-medium text-textoPrincipal">AA</span>) de la especificación <span class="font-medium text-textoPrincipal">WCAG 2.1</span>.</li>
                <li>Está optimizado para las últimas versiones estables de Chrome, Edge, Firefox, Safari y Opera.</li>
                <li>Está diseñado adaptándose con diseño responsivo a cualquier resolución de escritorio, tabletas o móviles.</li>
                <li>Utiliza de forma nativa lenguajes de marcado HTML5 y hojas de estilo CSS 3 estables.</li>
            </ul>
        </section>

    </div>
</div>
@endsection