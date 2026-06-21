@extends('layouts.app')

@section('title', 'Política de Privacidad')

@section('content')
<div class="max-w-3xl mx-auto py-12 px-4 sm:px-6">
    <!-- Encabezado de Página -->
    <header class="mb-12 border-b border-stone-200 pb-6">
        <h1 class="font-titulos font-bold text-3xl sm:text-4xl text-textoPrincipal tracking-tight mb-2">Política de Privacidad</h1>
        <p class="text-xs text-stone-400 font-medium uppercase tracking-wider">Última actualización: {{ date('d/m/Y') }}</p>
    </header>

    <!-- Contenedor con espaciado modular -->
    <div class="space-y-10 text-sm text-textoCuerpo leading-relaxed font-fuentePrincipal">
        
        <!-- Introducción -->
        <section class="border-l-2 border-stone-800 pl-4 py-1 bg-stone-50/50 rounded-r-lg">
            <h2 class="font-titulos font-bold text-sm uppercase tracking-wider text-textoPrincipal mb-1">Protección de Datos Personales</h2>
            <p class="text-stone-500 italic text-xs">Garantizando la seguridad, confidencialidad y transparencia de tus datos.</p>
        </section>

        <!-- Marco Legal -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Normativa Aplicable</h2>
            <p>Este sitio web adapta sus tratamientos al estricto cumplimiento de las normativas españolas y europeas vigentes en materia de protección de datos en entornos digitales:</p>
            
            <div class="flex flex-wrap gap-2 pt-2">
                <span class="inline-flex items-center text-xs bg-stone-100 text-stone-800 px-3 py-1 rounded-full font-medium border border-stone-200/60">RGPD (UE) 2016/679</span>
                <span class="inline-flex items-center text-xs bg-stone-100 text-stone-800 px-3 py-1 rounded-full font-medium border border-stone-200/60">LOPD-GDD 3/2018</span>
                <span class="inline-flex items-center text-xs bg-stone-100 text-stone-800 px-3 py-1 rounded-full font-medium border border-stone-200/60">LSSI-CE 34/2002</span>
            </div>
        </section>

        <!-- Responsable del Tratamiento -->
        <section class="space-y-3">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Identidad del Responsable</h2>
            <p>El responsable legal del tratamiento de los datos personales recabados a través de los formularios de este sitio web es:</p>
            
            <!-- Ficha Limpia de Contacto -->
            <div class="bg-white border border-stone-200 rounded-xl p-5 shadow-xs max-w-xl">
                <dl class="grid grid-cols-1 gap-y-3 sm:grid-cols-3 sm:gap-x-4">
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">Responsable</dt>
                    <dd class="text-sm font-medium text-textoPrincipal sm:col-span-2">[Pendiente]</dd>
                    
                    <dt class="text-xs font-semibold uppercase tracking-wider text-stone-400">NIF / CIF</dt>
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

        <!-- Principios Fundamentales -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Principios de Tratamiento</h2>
            <p>Tus datos serán tratados bajo principios de máxima confidencialidad alineados con el Art. 5 del RGPD:</p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-xs">
                <div class="p-4 bg-stone-50/50 border border-stone-200/60 rounded-xl">
                    <p class="font-semibold text-textoPrincipal mb-1">✓ Licitud, lealtad y transparencia</p>
                    <p class="text-stone-600">Requerimos consentimiento explícito informando de fines de forma clara.</p>
                </div>
                <div class="p-4 bg-stone-50/50 border border-stone-200/60 rounded-xl">
                    <p class="font-semibold text-textoPrincipal mb-1">✓ Minimización y exactitud</p>
                    <p class="text-stone-600">Solo solicitamos los datos estrictamente necesarios y actualizados.</p>
                </div>
                <div class="p-4 bg-stone-50/50 border border-stone-200/60 rounded-xl">
                    <p class="font-semibold text-textoPrincipal mb-1">✓ Conservación limitada</p>
                    <p class="text-stone-600">Los datos se mantienen únicamente durante el plazo mínimo operativo.</p>
                </div>
                <div class="p-4 bg-stone-50/50 border border-stone-200/60 rounded-xl">
                    <p class="font-semibold text-textoPrincipal mb-1">✓ Integridad y confidencialidad</p>
                    <p class="text-stone-600">Tratamiento protegido mediante cifrados de seguridad avanzados.</p>
                </div>
            </div>
        </section>

        <!-- Detalles Operativos -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Uso, Retención y Menores</h2>
            
            <div>
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-1">Finalidad y Base Legal</h3>
                <p>
                    La base legal es el <span class="font-medium text-textoPrincipal">consentimiento expreso</span> del Usuario. Los datos recogidos se destinan a la gestión de consultas, optimización de navegación y analíticas internas. El consentimiento puede ser revocado de forma sencilla y directa en cualquier momento.
                </p>
            </div>

            <div>
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-1">Plazo de Conservación y Destinatarios</h3>
                <p>
                    Los datos identificativos se conservarán durante un plazo fijado de <span class="font-semibold text-textoPrincipal">18 meses</span>, o hasta que el interesado solicite la supresión. Bajo ningún concepto los datos personales del usuario serán compartidos o vendidos a terceras entidades.
                </p>
            </div>

            <div>
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-1">Protección de Menores</h3>
                <p>
                    En cumplimiento del artículo 8 del RGPD y el artículo 7 de la LOPD-GDD, únicamente los <span class="font-medium text-textoPrincipal">mayores de 14 años</span> podrán otorgar consentimiento lícito. Los menores de dicha edad requerirán obligatoriamente la autorización de padres o tutores.
                </p>
            </div>
        </section>

        <!-- Seguridad SSL -->
        <section class="bg-stone-50 border border-stone-200 p-5 rounded-xl text-xs space-y-2">
            <p class="font-semibold text-sm text-textoPrincipal flex items-center gap-2">
                🛡️ Transmisión Segura mediante Certificado SSL
            </p>
            <p class="text-stone-600">
                Este sitio web cuenta con un cifrado activo <span class="font-medium text-textoPrincipal">SSL (Secure Socket Layer)</span>. Toda transmisión de datos realizada entre el navegador del usuario y los servidores se ejecuta de forma completamente encriptada. En caso de detectar cualquier brecha que suponga un riesgo alto para tus derechos, el Responsable se compromete a comunicarlo sin dilación indebida.
            </p>
        </section>

        <!-- Tus Derechos ARCO+ -->
        <section class="space-y-4">
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-2">Tus Derechos Legales (ARCO+)</h2>
            <p>Como interesado, puedes ejercer ante el Responsable del tratamiento los derechos de protección reconocidos por la normativa:</p>
            
            <div class="bg-white border border-stone-200 rounded-xl overflow-hidden shadow-xs divide-y divide-stone-100 text-xs">
                <div class="p-3"><span class="font-semibold text-textoPrincipal">Acceso:</span> Conocer si se están tratando tus datos y obtener detalles de los mismos.</div>
                <div class="p-3"><span class="font-semibold text-textoPrincipal">Rectificación:</span> Modificar o corregir aquella información inexacta o incompleta.</div>
                <div class="p-3"><span class="font-semibold text-textoPrincipal">Supresión (Olvido):</span> Solicitar la eliminación total de los registros cuando dejen de ser necesarios.</div>
                <div class="p-3"><span class="font-semibold text-textoPrincipal">Limitación y Portabilidad:</span> Restringir el alcance del tratamiento u obtener tus datos en formato estructurado de lectura mecánica.</div>
                <div class="p-3"><span class="font-semibold text-textoPrincipal">Oposición:</span> Negarte a que se realice o cese el tratamiento específico de tus datos de carácter personal.</div>
            </div>

            <div class="pt-2">
                <h3 class="font-titulos font-medium text-base text-textoPrincipal mb-2">¿Cómo ejercer tus derechos?</h3>
                <p class="mb-3">
                    Deberás enviar una comunicación por escrito con la referencia <span class="font-medium text-textoPrincipal">"RGPD-[Pendiente]"</span> acompañada de una fotocopia de tu DNI o documento equivalente para verificar la identidad a las siguientes vías oficiales:
                </p>
                <ul class="space-y-1 pl-5 list-disc marker:text-stone-400 text-xs text-stone-600">
                    <li>Dirección Postal: <span class="text-textoPrincipal">[Pendiente]</span></li>
                    <li>Correo Electrónico: <span class="text-textoPrincipal font-medium">[Pendiente]</span></li>
                </ul>
            </div>
        </section>

        <!-- Reclamaciones Autoridad -->
        <section>
            <h2 class="font-titulos font-semibold text-lg text-textoPrincipal border-b border-stone-100 pb-2 mb-3">Reclamación ante la Autoridad de Control</h2>
            <p>
                Si consideras que tus datos están siendo tratados de forma incorrecta o lícita, tienes pleno derecho a la tutela judicial efectiva y a interponer una reclamación formal ante la autoridad supervisora correspondiente. En España, el organismo competente es la <span class="font-medium text-textoPrincipal">Agencia Española de Protección de Datos</span> (<a href="https://www.aepd.es/" target="_blank" rel="noopener noreferrer" class="text-botonEnlace hover:underline">aepd.es</a>).
            </p>
        </section>

    </div>
</div>
@endsection