@extends('layouts.app')

@section('title', 'Sobre Mí - Perfil Técnico')

@section('content')
    <section class="flex flex-col md:flex-row gap-12 py-8 px-2 max-w-5xl mx-auto items-start">
        <!-- Tarjeta izquierda con foto -->
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
<!-- Tarjeta central -->
        <div class="w-full md:w-2/3 space-y-6">
            <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight">
                Conoce a la persona detrás de Calero Estudio
            </h1>
            
            <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg leading-relaxed">
                Ayudo a empresas, autónomos y asociaciones a mejorar su presencia online mediante páginas web modernas, rápidas y fáciles de gestionar.
            </p>
            
            <p class="font-fuentePrincipal text-textoCuerpo text-base leading-relaxed">
                <em>Mi historia:</em>

Soy Salvador Calero, desarrollador web y fundador de Calero Estudio.

Después de años trabajando en entornos técnicos e industriales, decidí enfocar mi carrera hacia el desarrollo web con el objetivo de ayudar a empresas, profesionales y asociaciones a aprovechar las oportunidades que ofrece Internet.

Tras completar mis estudios de Desarrollo de Aplicaciones Web (DAW), combino los conocimientos técnicos adquiridos con una visión práctica del funcionamiento de las empresas y de sus necesidades reales.

Mi filosofía de trabajo es sencilla: crear páginas web claras, rápidas, funcionales y adaptadas a los objetivos de cada cliente.
            </p>
            <p><em>Aficiones:</em>
            Fotografía y edición, hize un amago intento de adentrarme a la pintura, pero sin mucho éxito la verdad, me gusta asistir a exposiciones de arte, también me gusta ir a pescar, pasar tiempo con la familia y la formación, sí, tambien puede ser un hobbie.
            
            <div class="pt-4">
                <a href="{{ route('contact.index') }}" class="inline-flex items-center gap-2 text-botonEnlace hover:text-orange-800 font-fuentePrincipal font-medium transition-colors">
                    ¿Hablamos de tu infraestructura técnica? <span>&rarr;</span>
                </a>
            </div>
        </div>
    </section>
@endsection