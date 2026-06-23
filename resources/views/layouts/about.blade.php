@extends('layouts.app')

@section('title', 'Sobre Mí - Calero Estudio')

@section('content')
    <section class="max-w-5xl mx-auto py-8 px-4 sm:px-6 space-y-16">
        
        {{-- SECCIÓN SUPERIOR: BIOGRAFÍA Y PERFIL RÁPIDO --}}
        <div class="flex flex-col md:flex-row gap-12 items-start">
            
            <div class="w-full md:w-1/3 bg-white border border-stone-200/60 rounded-xl p-6 shadow-sm md:sticky md:top-24">
                {{-- Contenedor preparado para la Fotografía --}}
                <div class="w-28 h-28 bg-stone-100 rounded-xl mb-5 border border-stone-200/80 overflow-hidden flex items-center justify-center shadow-inner group">
                    <img src="{{ asset('img/salvador-calero.webp') }}" alt="Salvador Calero" class="w-full h-full object-cover">
                </div>

                <h2 class="font-titulos font-bold text-xl text-textoPrincipal">Salvador Calero</h2>
                <p class="font-fuentePrincipal text-botonEnlace text-sm font-medium mt-1">Desarrollador Web Full-Stack</p>
                
                <div class="mt-6 pt-6 border-t border-stone-100 space-y-4">
                    <div class="text-xs font-fuentePrincipal text-textoCuerpo">
                        <span class="block font-semibold text-textoPrincipal uppercase tracking-wider mb-1">Entorno habitual:</span>
                        Ubuntu Linux / Docker Sail / Git
                    </div>
                    <div class="text-xs font-fuentePrincipal text-textoCuerpo">
                        <span class="block font-semibold text-textoPrincipal uppercase tracking-wider mb-1">Formación:</span>
                        Técnico Superior en DAW (FP2)
                    </div>
                    <div class="text-xs font-fuentePrincipal text-textoCuerpo">
                        <span class="block font-semibold text-textoPrincipal uppercase tracking-wider mb-1">Mis aficiones:</span>
                        Fotografía, exposiciones de arte, pesca, tecnología y formación continua.
                    </div>
                </div>
            </div>

            <div class="w-full md:w-2/3 space-y-6">
                <span class="text-xs font-bold uppercase tracking-widest text-botonEnlace block">Sobre mí</span>
                <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight !mt-1">
                    Conoce a la persona detrás de Calero Estudio
                </h1>
                
                <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg leading-relaxed font-medium">
                    Ayudo a empresas, autónomos y asociaciones a mejorar su presencia online mediante páginas web modernas, rápidas y fáciles de gestionar.
                </p>
                
                <div class="space-y-4 font-fuentePrincipal text-textoCuerpo text-sm md:text-base leading-relaxed">
                    <h3 class="font-titulos font-bold text-lg text-textoPrincipal pt-2">Mi historia</h3>
                    <p>
                        Soy Salvador Calero, desarrollador web y fundador de Calero Estudio. Después de años trabajando en entornos técnicos e industriales, decidí enfocar mi carrera hacia el desarrollo web con el objetivo de ayudar a empresas, profesionales y asociaciones a aprovechar las oportunidades que ofrece Internet.
                    </p>
                    <p>
                        Tras completar mis estudios de **Desarrollo de Aplicaciones Web (DAW)**, combino los conocimientos técnicos adquiridos con una visión práctica del funcionamiento de las empresas y de sus necesidades reales.
                    </p>
                    <p>
                        Mi filosofía de trabajo es sencilla: crear páginas web claras, rápidas, funcionales y adaptadas a los objetivos de cada cliente.
                    </p>
                </div>
            </div>
        </div>

        {{-- SECCIÓN SEGUNDA: BLOQUE DE EXPERIENCIA EMPRESARIAL --}}
        <div class="bg-stone-50 border border-stone-200/50 rounded-2xl p-6 md:p-10 shadow-sm">
            <div class="max-w-3xl">
                <span class="text-xs font-bold uppercase tracking-widest text-botonEnlace block mb-2">Una ventaja real para tu negocio</span>
                <h2 class="font-titulos font-bold text-2xl md:text-3xl text-textoPrincipal tracking-tight mb-4">
                    Experiencia más allá del desarrollo web
                </h2>
                <div class="font-fuentePrincipal text-textoCuerpo text-sm md:text-base space-y-4 leading-relaxed">
                    <p>
                        Mi trayectoria profesional me ha permitido trabajar durante años con empresas de **distintos sectores**, comprendiendo de primera mano cómo funcionan los negocios, cuáles son sus prioridades y qué esperan realmente de un proveedor de servicios.
                    </p>
                    <p class="font-medium text-textoPrincipal">
                        Esta experiencia previa me ayuda a desarrollar soluciones web que no solo funcionan técnicamente, sino que también responden a necesidades y flujos de trabajo reales.
                    </p>
                </div>
            </div>
        </div>

        {{-- SECCIÓN TERCERA: VALORES CORPORATIVOS --}}
        <div class="space-y-8">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="font-titulos font-bold text-2xl md:text-3xl text-textoPrincipal tracking-tight">
                    ¿Qué puedes esperar al trabajar conmigo?
                </h2>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                {{-- Valor 1 --}}
                <div class="bg-white border border-stone-200/70 rounded-xl p-5 shadow-sm flex gap-4">
                    <span class="text-emerald-600 text-xl font-bold mt-0.5">✔</span>
                    <div>
                        <h4 class="font-titulos font-semibold text-textoPrincipal text-base">Atención personalizada</h4>
                        <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm mt-1 leading-relaxed">Cada proyecto es diferente y requiere una solución adaptada de forma estricta a sus necesidades.</p>
                    </div>
                </div>
                {{-- Valor 2 --}}
                <div class="bg-white border border-stone-200/70 rounded-xl p-5 shadow-sm flex gap-4">
                    <span class="text-emerald-600 text-xl font-bold mt-0.5">✔</span>
                    <div>
                        <h4 class="font-titulos font-semibold text-textoPrincipal text-base">Comunicación clara</h4>
                        <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm mt-1 leading-relaxed">Sin tecnicismos innecesarios ni palabras complejas. Te explicaré cada paso del proceso de forma sencilla.</p>
                    </div>
                </div>
                {{-- Valor 3 --}}
                <div class="bg-white border border-stone-200/70 rounded-xl p-5 shadow-sm flex gap-4">
                    <span class="text-emerald-600 text-xl font-bold mt-0.5">✔</span>
                    <div>
                        <h4 class="font-titulos font-semibold text-textoPrincipal text-base">Diseño profesional</h4>
                        <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm mt-1 leading-relaxed">Páginas web modernas, bien estructuradas, legibles y adaptadas a cualquier tipo de dispositivo.</p>
                    </div>
                </div>
                {{-- Valor 4 --}}
                <div class="bg-white border border-stone-200/70 rounded-xl p-5 shadow-sm flex gap-4">
                    <span class="text-emerald-600 text-xl font-bold mt-0.5">✔</span>
                    <div>
                        <h4 class="font-titulos font-semibold text-textoPrincipal text-base">Compromiso y cercanía</h4>
                        <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm mt-1 leading-relaxed">Acompañamiento absoluto antes, durante y después de la entrega del proyecto.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- SECCIÓN CUARTA: INFRAESTRUCTURA TÉCNICA (Discreta al final) --}}
        <div class="border-t border-stone-200 pt-8 text-center space-y-4">
            <h4 class="font-titulos font-semibold text-textoPrincipal text-xs uppercase tracking-wider text-stone-400">
                Tecnologías y herramientas con las que trabajo habitualmente
            </h4>
            <div class="flex flex-wrap justify-center gap-2 max-w-2xl mx-auto">
                @foreach(['PHP', 'Laravel', 'MySQL','PhpMyAdmin', 'HTML', 'CSS', 'JavaScript', 'Tailwind CSS', 'Git','WordPress'] as $tech)
                    <span class="bg-stone-100 text-stone-600 font-fuentePrincipal text-xs font-medium px-3 py-1.5 rounded-md border border-stone-200/40 shadow-sm">
                        {{ $tech }}
                    </span>
                @endforeach
            </div>
        </div>

        {{-- SECCIÓN QUINTA: LLAMADA A LA ACCIÓN (CTA) --}}
        <div class="border-t border-stone-200 pt-12">
            <div class="bg-gradient-to-br from-stone-900 to-stone-950 rounded-2xl p-8 md:p-12 shadow-xl text-center space-y-6 max-w-4xl mx-auto relative overflow-hidden">
                <div class="space-y-2 relative z-10">
                    <h2 class="font-titulos font-bold text-2xl md:text-3xl text-white tracking-tight">
                        ¿Tienes una idea o proyecto en mente?
                    </h2>
                    <p class="font-fuentePrincipal text-stone-300 text-sm md:text-base max-w-xl mx-auto">
                        Estaré encantado de ayudarte a encontrar la mejor solución técnica y comercial para tu negocio.
                    </p>
                </div>
                
                <div class="pt-2 relative z-10">
                    <a href="{{ route('contact.index') }}" class="inline-block bg-botonEnlace hover:bg-orange-600 text-white font-fuentePrincipal font-semibold text-sm px-6 py-3 rounded-xl transition-all shadow-md transform hover:-translate-y-0.5">
                        Solicitar presupuesto <span class="ml-1">&rarr;</span>
                    </a>
                </div>
                {{-- Sutil detalle de fondo decorativo técnico --}}
                <div class="absolute -right-10 -bottom-10 text-stone-800/20 font-mono text-7xl select-none pointer-events-none hidden sm:block">
                    &lt;/&gt;
                </div>
            </div>
        </div>

    </section>
@endsection