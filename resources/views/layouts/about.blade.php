@extends('layouts.app')

@section('title', 'Sobre Mí - Perfil Técnico')

@section('content')
    <section class="flex flex-col md:flex-row gap-12 py-8 px-2 max-w-5xl mx-auto items-start">
        
        <div class="w-full md:w-1/3 bg-white border border-stone-200/60 rounded-xl p-6 shadow-sm">
            <div class="w-24 h-24 bg-stone-100 rounded-full mb-4 flex items-center justify-center text-stone-400 font-titulos font-bold text-xl border border-stone-200">
                M.T.
            </div>
            <h2 class="font-titulos font-bold text-xl text-textoPrincipal">Desarrollador Web</h2>
            <p class="font-fuentePrincipal text-botonEnlace text-sm font-medium mt-1">Especialista Backend Laravel</p>
            
            <div class="mt-6 pt-6 border-t border-stone-100 space-y-3">
                <div class="text-xs font-fuentePrincipal text-textoCuerpo">
                    <span class="block font-semibold text-textoPrincipal uppercase tracking-wider">Entorno habitual:</span>
                    Ubuntu Linux / Docker Sail
                </div>
                <div class="text-xs font-fuentePrincipal text-textoCuerpo">
                    <span class="block font-semibold text-textoPrincipal uppercase tracking-wider">Stack principal:</span>
                    PHP 8.5 / Tailwind CSS / MySQL
                </div>
            </div>
        </div>

        <div class="w-full md:w-2/3 space-y-6">
            <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight">
                Trayectoria Analítica y Código Estructurado
            </h1>
            
            <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg leading-relaxed">
                [Texto Placeholder]: Profesional enfocado al desarrollo de soluciones de software robustas, huyendo de las soluciones genéricas y priorizando siempre la limpieza del backend y la velocidad de carga en el navegador.
            </p>
            
            <p class="font-fuentePrincipal text-textoCuerpo text-base leading-relaxed">
                Mi metodología se basa en la creación de entornos de desarrollo perfectamente aislados y replicables, garantizando que el software se comporte con la misma solidez en local que durante el despliegue final en producción.
            </p>
            
            <div class="pt-4">
                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-2 text-botonEnlace hover:text-orange-800 font-fuentePrincipal font-medium transition-colors">
                    ¿Hablamos de tu infraestructura técnica? <span>&rarr;</span>
                </a>
            </div>
        </div>
    </section>
@endsection