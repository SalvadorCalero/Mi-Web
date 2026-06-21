@extends('layouts.app')

@section('title', 'Aviso Legal')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4 sm:px-6">
    <!-- Encabezado de Página -->
    <header class="mb-12 border-b border-stone-200 pb-6">
        <h1 class="font-titulos font-bold text-3xl sm:text-4xl text-textoPrincipal tracking-tight mb-2">Aviso Legal</h1>
        <p class="text-xs text-stone-400 font-medium uppercase tracking-wider">Última actualización: {{ date('d/m/Y') }}</p>
    </header>

    <!-- Contenedor con espaciado modular -->
    <div class="space-y-10 text-sm text-textoCuerpo leading-relaxed font-fuentePrincipal">
        
        <!-- Introducción -->
        <section class="border-l-2 border-stone-800 pl-4 py-1 bg-stone-50/50 rounded-r-lg">
            <h2 class="font-titulos font-bold text-sm uppercase tracking-wider text-textoPrincipal mb-1">Aviso Legal y Condiciones Generales de Uso</h2>
            <p class="text-stone-500 italic text-xs">Se ruega una lectura atenta de los términos antes de la navegación.</p>
        </section>

        <!-- I. INFORMACIÓN GENERAL -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-4">I. Información General</h2>
            <p class="mb-4">
                En cumplimiento con el deber de información dispuesto en la Ley 34/2002 de Servicios de la Sociedad de la Información y el Comercio Electrónico (LSSI-CE) de 11 de julio, se facilitan a continuación los siguientes datos de información general de este sitio web:
            </p>
            <p class="mb-4">
                La titularidad de este sitio web, <span class="font-medium text-textoPrincipal">[Pendiente]</span>, (en adelante, Sitio Web) la ostenta <span class="font-medium text-textoPrincipal">[Pendiente]</span>, y cuyos datos de contacto y facturación son de carácter público:
            </p>
            
            <!-- Tarjeta limpia de Datos Identificativos -->
            <div class="bg-white border border-stone-200 rounded-xl p-5 shadow-xs max-w-xl">
                <dl class="grid grid-cols-1 gap-y-3 sm:grid-cols-3 sm:gap-x-4">
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Titular</dt>
                    <dd class="text-sm font-medium text-textoPrincipal sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">NIF/CIF</dt>
                    <dd class="text-sm font-medium text-textoPrincipal sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Dirección</dt>
                    <dd class="text-sm text-textoCuerpo sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Teléfono</dt>
                    <dd class="text-sm text-textoCuerpo sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Email</dt>
                    <dd class="text-sm font-medium text-botonEnlace sm:col-span-2">[Pendiente]</dd>
                </dl>
            </div>
        </section>

        <!-- II. TÉRMINOS Y CONDICIONES -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">II. Términos y Condiciones Generales de Uso</h2>
            
            <div>
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-2">El objeto de las condiciones: El Sitio Web</h3>
                <p>
                    El objeto de las presentes Condiciones Generales de Uso (en adelante, Condiciones) es regular el acceso y la utilización del Sitio Web. A los efectos de las presentes Condiciones se entenderá como Sitio Web: la apariencia externa de los interfaces de pantalla, tanto de forma estática como de forma dinámica, es decir, el árbol de navegación; y todos los elementos integrados tanto en los interfaces de pantalla como en el árbol de navegación (en adelante, Contenidos) y todos aquellos servicios o recursos en línea que en su caso ofrezca a los Usuarios (en adelante, Servicios).
                </p>
            </div>

            <p>
                <span class="font-medium text-textoPrincipal">[Pendiente]</span> se reserva la facultad de modificar, en cualquier momento, y sin aviso previo, la presentación y configuración del Sitio Web y de los Contenidos y Servicios que en él pudieran estar incorporados. El Usuario reconoce y acepta que en cualquier momento se pueda interrumpir, desactivar y/o cancelar cualquiera de estos elementos que se integran en el Sitio Web o el acceso a los mismos.
            </p>
            <p>
                El acceso al Sitio Web por el Usuario tiene carácter libre y, por regla general, es <span class="font-medium text-textoPrincipal">gratuito</span> sin que el Usuario tenga que proporcionar una contraprestación para poder disfrutar de ello, salvo en lo relativo al coste de conexión a través de la red de telecomunicaciones suministrada por el proveedor de acceso que hubiere contratado el Usuario.
            </p>

            <div class="pt-2">
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-2">El Usuario</h3>
                <p class="mb-3">
                    El acceso, la navegación y uso del Sitio Web confiere la condición de <span class="font-medium text-textoPrincipal">Usuario</span>, por lo que se aceptan, desde que se inicia la navegación, todas las Condiciones aquí establecidas, así como sus ulteriores modificaciones. El Usuario asume su responsabilidad para realizar un uso correcto del Sitio Web. Esta responsabilidad se extenderá a:
                </p>
                <ul class="space-y-3 pl-5 list-disc marker:text-stone-400">
                    <li>
                        Un uso de la información, Contenidos y/o Servicios sin que sea contrario a lo dispuesto por las presentes Condiciones, la Ley, la moral o el orden público, o que de cualquier otro modo puedan suponer lesión de los derechos de terceros.
                    </li>
                    <li>
                        La veracidad y licitud de las informaciones aportadas por el Usuario en los formularios extendidos para el acceso a ciertos Contenidos o Servicios. En todo caso, el Usuario notificará de forma inmediata acerca de cualquier hecho que permita el uso indebido de dicha información registrada, con el fin de proceder a su inmediata cancelación.
                    </li>
                </ul>
            </div>

            <p>
                Se reserva el derecho de retirar todos aquellos comentarios y aportaciones que vulneren la ley, el respeto a la dignidad de la persona, o que no resultaran adecuados para su publicación. En cualquier caso, no será responsable de las opiniones vertidas por los Usuarios a través de herramientas de participación.
            </p>
        </section>

        <!-- III. ACCESO Y NAVEGACIÓN -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">III. Acceso y Navegación: Exclusión de Garantías</h2>
            <p class="mb-3">
                No se garantiza la continuidad, disponibilidad y utilidad del Sitio Web, ni de los Contenidos o Servicios. Se hará todo lo posible por el buen funcionamiento, sin embargo, no se responsabiliza ni garantiza que el acceso no vaya a ser ininterrumpido o que esté libre de error.
            </p>
            <p>
                Tampoco se responsabiliza o garantiza que el contenido o software al que pueda accederse esté libre de error o cause un daño al sistema informático del Usuario. En ningún caso se responderá por pérdidas o daños de cualquier tipo que surjan por el acceso o uso de la web, incluyendo caídas o defectos de las telecomunicaciones.
            </p>
        </section>

        <!-- IV. POLÍTICA DE ENLACES -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">IV. Política de Enlaces</h2>
            <p>
                El Sitio Web pone o puede poner a disposición medios de enlace (links, banners, botones) que permiten acceder a sitios web pertenecientes a terceros con el objeto de facilitar la búsqueda de información. Sin embargo, no se comercializan ni ofrecen dichos productos o servicios, ni se asume responsabilidad alguna por la calidad o licitud de los mismos.
            </p>
            <div class="bg-stone-50 border border-stone-200/60 rounded-xl p-4 text-xs space-y-2 text-stone-600">
                <p class="font-semibold text-textoPrincipal text-sm mb-1">Requisitos para establecer hipervínculos hacia este Sitio Web:</p>
                <p>• No se permite la reproducción total o parcial de los Contenidos sin autorización expresa.</p>
                <p>• No se admitirán manifestaciones falsas, inexactas o incorrectas sobre el sitio.</p>
                <p>• El establecimiento del enlace no implicará la existencia de relaciones comerciales ni la aceptación de sus contenidos.</p>
            </div>
        </section>

        <!-- V. PROPIEDAD INTELECTUAL -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">V. Propiedad Intelectual e Industrial</h2>
            <p class="mb-3">
                El titular, por sí o como cesionario, es dueño de todos los derechos de propiedad intelectual e industrial del Sitio Web (imágenes, código fuente, marcas, logotipos, estructuras de diseño, etc.). Serán, por consiguiente, obras protegidas por el ordenamiento jurídico español.
            </p>
            <p>
                Quedan <span class="font-semibold text-textoPrincipal">expresamente prohibidas</span> la reproducción, la distribución y la comunicación pública de la totalidad o parte de los contenidos de esta página web con fines comerciales, en cualquier soporte y por cualquier medio técnico, sin autorización expresa previa.
            </p>
        </section>

        <!-- VI. ACCIONES LEGALES -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">VI. Acciones Legales, Legislación y Jurisdicción</h2>
            <p>
                Se reserva la facultad de presentar las acciones civiles o penales que considere necesarias por la utilización indebida del Sitio Web. La relación se regirá por la <span class="font-medium text-textoPrincipal">normativa vigente en el territorio español</span>, sometiendo cualquier controversia a los juzgados y tribunales de la jurisdicción ordinaria correspondientes conforme a derecho.
            </p>
        </section>

    </div>
</div>
@endsection