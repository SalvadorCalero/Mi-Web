{{-- Indicamos que el layout padre está en la misma carpeta 'layouts' --}}
@extends('layouts.app')

@section('title', 'Proyectos y Casos de Estudio')

@section('content')
    <section class="py-8 px-2" 
             x-data="{ 
                modalOpen: false, 
                modalImages: [], {{-- Guardará el array de fotos del proyecto --}}
                currentImageIndex: 0, {{-- Controlará que foto se muestra --}}
                modalTitle: '',
                activeTab: 'otros' {{-- Controla la pestaña activa por defecto --}}
             }">
             
        <div class="max-w-3xl mb-8">
            <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight">
                Proyectos web desarrollados para empresas y profesionales
            </h1>
            <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg mt-3 leading-relaxed">
                Cada proyecto es diferente porque cada negocio tiene necesidades distintas. Aquí puedes ver algunos de los sitios web en los que he participado, diseñados para mejorar la presencia online, transmitir confianza y facilitar el contacto con clientes.
            </p>
            <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg mt-3 leading-relaxed">
                Mi objetivo en cada proyecto es crear sitios web claros, rápidos y adaptados a cualquier dispositivo, ayudando a empresas y profesionales a mostrar sus servicios de forma profesional.
            </p>
            
        </div>

        <div class="border-b border-stone-200 mb-10">
            <nav class="flex space-x-6 -mb-px" aria-label="Tabs de proyectos">
                <button @click="activeTab = 'formacion'"
                        :class="activeTab === 'formacion' 
                            ? 'border-stone-900 text-textoPrincipal font-semibold' 
                            : 'border-transparent text-stone-400 hover:text-textoCuerpo hover:border-stone-200'"
                        class="whitespace-nowrap py-4 px-1 border-b-2 font-fuentePrincipal text-sm transition-all cursor-pointer">
                    Clientes
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

        {{-- TAB: CLIENTES (FORMACIÓN) --}}
        <div x-show="activeTab === 'formacion'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($formacionProjects as $project)
                <article class="bg-white border border-stone-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col h-full">
                    
                    <div class="aspect-video bg-stone-100 relative cursor-pointer overflow-hidden group"
                         data-title="{{ $project->title }}"
                         data-images="{{ $project->images->map(fn($img) => asset($img->image_path))->toJson() }}"
                         @click="
                            modalImages = [];
                            modalOpen = true; 
                            modalTitle = $el.getAttribute('data-title'); 
                            currentImageIndex = 0;
                            modalImages = JSON.parse($el.getAttribute('data-images'));
                         ">
                        
                        @if($project->image_path)
                            <img src="{{ asset($project->image_path) }}" 
                                 alt="Previsualización de {{ $project->title }}" 
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="w-full h-full bg-stone-100 flex items-center justify-center text-stone-400 text-xs">Sin imagen</div>
                        @endif
                        
                        <div class="absolute inset-0 bg-stone-950/0 group-hover:bg-stone-950/20 transition-colors flex items-center justify-center">
                            <span class="bg-stone-900/80 text-white text-xs font-semibold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1 backdrop-blur-xs">
                                Ampliar Vista 🔍
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="font-titulos font-bold text-xl text-textoPrincipal mb-2">
                            {{ $project->title }}
                        </h2>
                        <p class="font-fuentePrincipal text-textoCuerpo text-sm leading-relaxed flex-grow">
                            {{ $project->description }}
                        </p>
                        
                        @if($project->url)
                            <div class="mt-6 pt-4 border-t border-stone-100">
                                <a href="{{ $project->url }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="w-full bg-stone-900 hover:bg-stone-800 text-white font-fuentePrincipal font-medium text-xs py-2.5 px-4 rounded-xl inline-flex items-center justify-center gap-2 transition-colors shadow-xs">
                                    Visitar sitio web activo
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-full py-12 px-4 text-center bg-stone-50/50 rounded-xl border border-dashed border-stone-200">
                    <p class="font-fuentePrincipal text-textoCuerpo text-sm">No hay proyectos de formación.</p>
                </div>
            @endforelse
        </div>

        {{-- TAB: PROYECTOS PERSONALES --}}
        <div x-show="activeTab === 'personales'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-cloak>
            @forelse($personalesProjects as $project)
                <article class="bg-white border border-stone-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col h-full">
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

        {{-- TAB: MÁS PROYECTOS (OTROS) --}}
        <div x-show="activeTab === 'otros'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" x-cloak>
            @forelse($otrosProjects as $project)
                <article class="bg-white border border-stone-100 rounded-xl overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col h-full">
                    
                    <div class="aspect-video bg-stone-100 relative cursor-pointer overflow-hidden group"
                         data-title="{{ $project->title }}"
                         data-images="{{ $project->images->map(fn($img) => asset($img->image_path))->toJson() }}"
                         @click="
                            modalImages = [];
                            modalOpen = true; 
                            modalTitle = $el.getAttribute('data-title'); 
                            currentImageIndex = 0;
                            modalImages = JSON.parse($el.getAttribute('data-images'));
                         ">
                        
                        @if($project->image_path)
                            <img src="{{ asset($project->image_path) }}" 
                                 alt="Previsualización de {{ $project->title }}" 
                                 class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105">
                        @else
                            <div class="w-full h-full bg-stone-100 flex items-center justify-center text-stone-400 text-xs">Sin imagen</div>
                        @endif
                        
                        <div class="absolute inset-0 bg-stone-950/0 group-hover:bg-stone-950/20 transition-colors flex items-center justify-center">
                            <span class="bg-stone-900/80 text-white text-xs font-semibold px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity flex items-center gap-1 backdrop-blur-xs">
                                Ampliar Vista 🔍
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6 flex flex-col flex-grow">
                        <h2 class="font-titulos font-bold text-xl text-textoPrincipal mb-2">
                            {{ $project->title }}
                        </h2>
                        <p class="font-fuentePrincipal text-textoCuerpo text-sm leading-relaxed flex-grow">
                            {{ $project->description }}
                        </p>
                        
                        @if($project->url)
                            <div class="mt-6 pt-4 border-t border-stone-100">
                                <a href="{{ $project->url }}" 
                                   target="_blank" 
                                   rel="noopener noreferrer" 
                                   class="w-full bg-stone-900 hover:bg-stone-800 text-white font-fuentePrincipal font-medium text-xs py-2.5 px-4 rounded-xl inline-flex items-center justify-center gap-2 transition-colors shadow-xs">
                                    Visitar sitio web activo
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                                </a>
                            </div>
                        @endif
                    </div>
                </article>
            @empty
                <div class="col-span-full py-12 px-4 text-center bg-stone-50/50 rounded-xl border border-dashed border-stone-200">
                    <p class="font-titulos font-semibold text-textoPrincipal text-base">Actualización Próximamente</p>
                </div>
            @endforelse
        </div>

        <!-- Modal con Visor / Carrusel -->
        <div x-show="modalOpen" 
             class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-stone-950/80 backdrop-blur-md"
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @keydown.escape.window="modalOpen = false"
             @keydown.arrow-left.window="if(modalImages.length > 1 && currentImageIndex > 0) currentImageIndex--"
             @keydown.arrow-right.window="if(modalImages.length > 1 && currentImageIndex < modalImages.length - 1) currentImageIndex++"
             x-cloak>
            
            <div class="bg-stone-900 border border-stone-800 rounded-2xl max-w-5xl w-full h-[85vh] flex flex-col overflow-hidden shadow-2xl"
                 @click.away="modalOpen = false">
                
                <div class="px-6 py-4 border-b border-stone-800 bg-stone-900/50 flex items-center justify-between">
                    <h3 class="font-titulos font-bold text-white text-lg flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-stone-400 animate-pulse"></span>
                        Análisis de Interfaz: <span x-text="modalTitle" class="text-stone-300 font-normal"></span>
                    </h3>
                    <button @click="modalOpen = false" class="text-stone-400 hover:text-white font-bold text-sm bg-stone-800 hover:bg-stone-700 px-3 py-1.5 rounded-lg transition-colors cursor-pointer">
                        Cerrar (ESC)
                    </button>
                </div>

                <!-- Contenedor del visor con controles -->
                <div class="flex-1 relative overflow-hidden bg-stone-950 flex items-center justify-center p-4">
                    
                    <!-- Botón Anterior -->
                    <button @click="currentImageIndex--" 
                            x-show="modalImages.length > 1 && currentImageIndex > 0"
                            class="absolute left-4 z-10 bg-stone-900/80 text-white p-3 rounded-full hover:bg-stone-800 transition-colors border border-stone-700 cursor-pointer">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                    </button>

                    <!-- Imagen actual -->
                    <div class="w-full h-full flex items-center justify-center overflow-auto current-scrollbar">
                        <template x-if="modalImages.length > 0">
                            <!-- Se quita la directiva conflictiva de Blade y se usa un listener de JS válido -->
                            <img :src="modalImages[currentImageIndex]" 
                                 :alt="modalTitle" 
                                 x-on:error="$event.target.src = 'https://placehold.co/600x400/292524/a8a29e?text=Imagen+no+encontrada'"
                                 class="max-w-full max-h-full object-contain rounded-lg shadow-sm select-none">
                        </template>
                        <template x-if="modalImages.length === 0">
                            <div class="text-stone-400 text-sm flex items-center justify-center h-full">No hay capturas disponibles para este proyecto.</div>
                        </template>
                    </div>

                    <!-- Botón Siguiente -->
                    <button @click="currentImageIndex++" 
                            x-show="modalImages.length > 1 && currentImageIndex < modalImages.length - 1"
                            class="absolute right-4 z-10 bg-stone-900/80 text-white p-3 rounded-full hover:bg-stone-800 transition-colors border border-stone-700 cursor-pointer">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </button>

                    <!-- Indicador de Páginas/Fotos -->
                    <div x-show="modalImages.length > 1" class="absolute bottom-6 left-1/2 transform -translate-x-1/2 bg-stone-900/90 text-stone-300 text-xs font-medium px-3 py-1.5 rounded-full border border-stone-700 backdrop-blur-xs select-none">
                        <span x-text="currentImageIndex + 1"></span> / <span x-text="modalImages.length"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection