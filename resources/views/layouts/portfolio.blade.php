{{-- Indicamos que el layout padre está en la misma carpeta 'layouts' --}}
@extends('layouts.app')

@section('title', 'Proyectos y Casos de Estudio')

@section('content')
    <section class="py-8 px-2" 
             x-data="{ 
                modalOpen: false, 
                modalImage: '', 
                modalTitle: '',
                activeTab: 'formacion' {{-- Controla la pestaña activa por defecto --}}
             }">
             
        <div class="max-w-3xl mb-8">
            <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight">
                Historial de Proyectos
            </h1>
            <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg mt-3 leading-relaxed">
                Galería completa de las aplicaciones y desarrollos web en los que he participado. Cada tarjeta representa una arquitectura desplegada y testeada.
            </p>
        </div>

        <!-- Pestañas -->

        <div class="border-b border-stone-200 mb-10">
            <nav class="flex space-x-6 -mb-px" aria-label="Tabs de proyectos">
                <button @click="activeTab = 'formacion'"
                        :class="activeTab === 'formacion' 
                            ? 'border-stone-900 text-textoPrincipal font-semibold' 
                            : 'border-transparent text-stone-400 hover:text-textoCuerpo hover:border-stone-200'"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-fuentePrincipal text-sm transition-all cursor-pointer">
                    Formación
                </button>

                <button @click="activeTab = 'personales'"
                        :class="activeTab === 'personales' 
                            ? 'border-stone-900 text-textoPrincipal font-semibold' 
                            : 'border-transparent text-stone-400 hover:text-textoCuerpo hover:border-stone-200'"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-fuentePrincipal text-sm transition-all cursor-pointer">
                    Proyectos Personales
                </button>

                <button @click="activeTab = 'otros'"
                        :class="activeTab === 'otros' 
                            ? 'border-stone-900 text-textoPrincipal font-semibold' 
                            : 'border-transparent text-stone-400 hover:text-textoCuerpo hover:border-stone-200'"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-fuentePrincipal text-sm transition-all cursor-pointer">
                    Más Proyectos
                </button>
            </nav>
        </div>

        <!-- Contenido de la pestaña Formación -->

        <div x-show="activeTab === 'formacion'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @forelse($formacionProjects as $project)
        @empty
        <div class="col-span-full py-12 text-center bg-stone-50/50 rounded-xl border border-dashed border-stone-200">
            <p class="font-fuentePrincipal text-textoCuerpo text-sm">No hay proyectos de formación.</p>
        </div>
    @endforelse
</div>

        <!-- Contenido de la pestaña Personales -->

        <div x-show="activeTab === 'personales'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-cloak>
    @forelse($personalesProjects as $project)
        <article class="bg-white border border-stone-100 rounded-xl overflow-hidden shadow-sm flex flex-col h-full">
            </article>
    @empty
        <div class="col-span-full py-12 px-4 text-center bg-stone-50/50 rounded-xl border border-dashed border-stone-200">
            <p class="font-titulos font-semibold text-textoPrincipal text-base">Actualización Próximamente</p>
        </div>
    @endforelse
</div>

        <!-- Contenido de la pestaña Otros -->

<div x-show="activeTab === 'otros'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-cloak>
    @forelse($otrosProjects as $project)
        <article class="bg-white border border-stone-100 rounded-xl overflow-hidden shadow-sm flex flex-col h-full">
            <div class="p-6 flex flex-col flex-grow">
                <h2 class="font-titulos font-bold text-xl text-textoPrincipal mb-2">{{ $project->title }}</h2>
                <p class="font-fuentePrincipal text-textoCuerpo text-sm leading-relaxed flex-grow">{{ $project->description }}</p>
            </div>
        </article>
    @empty
        <div class="col-span-full py-12 px-4 text-center bg-stone-50/50 rounded-xl border border-dashed border-stone-200">
            <p class="font-titulos font-semibold text-textoPrincipal text-base">Actualización Próximamente</p>
        </div>
    @endforelse
</div>

        <div x-show="modalOpen" 
             class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-stone-950/80 backdrop-blur-md"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @keydown.escape.window="modalOpen = false"
             x-cloak>
            
            <div class="bg-stone-900 border border-stone-800 rounded-2xl max-w-5xl w-full h-[85vh] flex flex-col overflow-hidden shadow-2xl"
                 @click.away="modalOpen = false">
                
                <div class="px-6 py-4 border-b border-stone-800 bg-stone-900/50 flex items-center justify-between">
                    <h3 class="font-titulos font-bold text-white text-lg flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-botonEnlace animate-pulse"></span>
                        Análisis de Interfaz: <span x-text="modalTitle" class="text-stone-300 font-normal"></span>
                    </h3>
                    <button @click="modalOpen = false" class="text-stone-400 hover:text-white font-bold text-sm bg-stone-800 hover:bg-stone-700 px-3 py-1.5 rounded-lg transition-colors cursor-pointer">
                        Cerrar (ESC)
                    </button>
                </div>

                <div class="flex-1 overflow-y-auto bg-stone-950 p-4 current-scrollbar">
                    <img :src="modalImage" :alt="modalTitle" class="w-full h-auto rounded-lg shadow-sm">
                </div>
            </div>
        </div>
    </section>
@endsection