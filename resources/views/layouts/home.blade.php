@extends('layouts.app')

@section('title', 'Inicio - Desarrollador Web Freelance')

@section('content')
    <!-- Todo el contenido obligatoriamente dentro del section -->

    <!-- Hero -->
    <section class="flex flex-col items-center justify-center text-center py-16 md:py-20 px-4 bg-fondoGeneral rounded-xl border border-stone-300/40 mt-6">
        
        <span class="text-botonEnlace font-titulos font-semibold tracking-wider text-sm uppercase mb-3 block">
            Desarrollo de Aplicaciones Web & Backend Replicable
        </span>
        
        <h1 class="font-titulos font-bold text-3xl md:text-5xl text-textoPrincipal max-w-4xl leading-tight md:leading-tight">
            Código limpio, infraestructuras aisladas y diseño con enfoque humano.
        </h1>
        
        <p class="font-fuentePrincipal text-textoCuerpo text-base md:text-lg max-w-2xl mt-6 leading-relaxed">
            Especializado en la creación de herramientas digitales robustas utilizando el ecosistema PHP y Laravel bajo entornos profesionales Docker. Diseño optimizado para velocidades de carga instantáneas.
        </p>
        
        <div class="mt-8 flex flex-col sm:flex-row gap-4 w-full sm:w-auto">
            <a href="{{ route('contact.index') }}" class="inline-block bg-botonEnlace hover:bg-orange-800 text-white font-fuentePrincipal font-medium px-8 py-3.5 rounded-lg shadow-md shadow-orange-700/10 transition-colors text-center">
                Iniciar Proyecto
            </a>
            <a href="{{ route('portfolio') }}" class="inline-block bg-white hover:bg-stone-50 text-textoPrincipal border border-stone-200 font-fuentePrincipal font-medium px-8 py-3.5 rounded-lg transition-colors text-center">
                Explorar Proyectos
            </a>
        </div>
    </section>

    <!-- Animación 3d de todos  los proyectos del portfolio -->
<section class="mt-16 md:mt-24" 
         x-data="{ 
            activeProject: 0, 
            total: {{ count($recentProjects) }},
            modalOpen: false,
            modalImage: '',
            modalTitle: '',
            
            // Definición de las 4 esquinas posibles
            corners: [
                { origin: 'origin-bottom-left', move: '-translate-x-16 translate-y-16' },  // Abajo Izquierda
                { origin: 'origin-top-right',   move: 'translate-x-16 -translate-y-16' },  // Arriba Derecha
                { origin: 'origin-top-left',    move: '-translate-x-16 -translate-y-16' }, // Arriba Izquierda
                { origin: 'origin-bottom-right', move: 'translate-x-16 translate-y-16' }   // Abajo Derecha
            ],
            
            // Estados actuales de las esquinas
            currentEnterOrigin: 'origin-bottom-left',
            currentEnterMove: '-translate-x-16 translate-y-16',
            currentLeaveOrigin: 'origin-top-right',
            currentLeaveMove: 'translate-x-16 -translate-y-16',

            randomizeDirections() {
                let startIndex = Math.floor(Math.random() * this.corners.length);
                let endIndex;
                do {
                    endIndex = Math.floor(Math.random() * this.corners.length);
                } while (endIndex === startIndex); // Forzamos esquinas opuestas o distintas

                this.currentEnterOrigin = this.corners[startIndex].origin;
                this.currentEnterMove = this.corners[startIndex].move;
                
                this.currentLeaveOrigin = this.corners[endIndex].origin;
                this.currentLeaveMove = this.corners[endIndex].move;
            },

            next() {
                this.randomizeDirections();
                this.$nextTick(() => {
                    this.activeProject = (this.activeProject === this.total - 1) ? 0 : this.activeProject + 1;
                });
            },

            prev() {
                this.randomizeDirections();
                this.$nextTick(() => {
                    this.activeProject = (this.activeProject === 0) ? this.total - 1 : this.activeProject - 1;
                });
            },

            init() { 
                this.randomizeDirections();
                setInterval(() => { 
                    if(!this.modalOpen) {
                        this.next();
                    }
                }, 7000);
            } 
         }">
    
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-8 px-2">
        <div>
            <span class="text-botonEnlace font-titulos font-semibold tracking-wider text-xs uppercase mb-1 block">Experiencia en Producción</span>
            <h2 class="font-titulos font-bold text-2xl md:text-3xl text-textoPrincipal">Proyectos Recientes</h2>
        </div>
        
        <div class="flex items-center gap-1 bg-white border border-stone-200/60 p-1 rounded-xl shadow-xs mt-4 md:mt-0">
            <button @click="prev()" class="p-2.5 text-textoCuerpo hover:text-botonEnlace transition-colors pointer-events-auto cursor-pointer" aria-label="Proyecto anterior">&larr;</button>
            <div class="w-[1px] h-4 bg-stone-200"></div>
            <button @click="next()" class="p-2.5 text-textoCuerpo hover:text-botonEnlace transition-colors pointer-events-auto cursor-pointer" aria-label="Siguiente proyecto">&rarr;</button>
        </div>
    </div>

    <div class="relative h-[300px] sm:h-[400px] md:h-[500px] w-full overflow-hidden rounded-2xl bg-transparent">
        
        @foreach($recentProjects as $index => $project)
            <div x-show="activeProject === {{ $index }}"
                 x-transition:enter="transition ease-out duration-1200 delay-1000 transform"
                 :class="activeProject === {{ $index }} ? currentEnterOrigin : ''"
                 x-transition:enter-start="opacity-0 scale-50 blur-md"
                 x-transition:enter-end="opacity-100 scale-100 blur-0 translate-x-0 translate-y-0"

                 x-transition:leave="transition ease-in duration-1000 transform absolute inset-0"
                 :class="activeProject !== {{ $index }} ? currentLeaveOrigin : ''"
                 x-transition:leave-start="opacity-100 scale-100 blur-0 translate-x-0 translate-y-0"
                 x-transition:leave-end="opacity-0 scale-50 blur-sm"
                 class="absolute inset-0 w-full h-full group">
                
                <div class="w-full h-full overflow-hidden relative cursor-pointer"
                     :class="activeProject === {{ $index }} ? 'transition-all duration-1200' : ''"
                     @click="modalOpen = true; modalImage = '{{ asset($project->page_image_path) }}'; modalTitle = '{{ $project->title }}'">
                    
                    <img src="{{ asset($project->image_path) }}" 
                         alt="Captura {{ $project->title }}" 
                         class="w-full h-full object-cover object-top transition-all duration-700">
                    <div class="absolute inset-0 bg-gradient-to-t from-stone-950/90 via-stone-950/20 to-transparent"></div>
                </div>

                <div class="absolute bottom-0 inset-x-0 p-6 md:p-10 flex flex-col md:flex-row md:items-end justify-between gap-4 pointer-events-none">
                    <div class="max-w-2xl bg-stone-950/50 backdrop-blur-md p-4 md:p-6 rounded-xl border border-white/10 shadow-lg">
                        <span class="text-[10px] uppercase font-bold tracking-widest text-botonEnlace bg-white/10 px-2 py-1 rounded-sm mb-2 inline-block">Despliegue Técnico</span>
                        <h3 class="font-titulos font-bold text-xl md:text-2xl text-white mb-2">{{ $project->title }}</h3>
                        <p class="font-fuentePrincipal text-stone-200 text-xs md:text-sm leading-relaxed">{{ $project->description }}</p>
                    </div>
                    <div class="flex items-center gap-3 pointer-events-auto">
                        <button @click="modalOpen = true; modalImage = '{{ asset($project->page_image_path) }}'; modalTitle = '{{ $project->title }}'" 
                                class="bg-white hover:bg-stone-100 text-stone-950 font-semibold text-xs py-3 px-5 rounded-xl transition-all shadow-md flex items-center gap-2 cursor-pointer">
                            Ver Captura Completa 🔍
                        </button>
                        @if($project->url)
                            <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" 
                               class="bg-stone-900/80 hover:bg-stone-900 text-white border border-white/10 font-semibold text-xs py-3 px-5 rounded-xl transition-all backdrop-blur-xs shadow-md">
                                Visitar &rarr;
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div x-show="modalOpen" 
         class="fixed inset-0 z-50 overflow-y-auto flex items-center justify-center p-4 bg-stone-950/90 backdrop-blur-md"
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
                <button @click="modalOpen = false" class="text-stone-400 hover:text-white font-bold text-sm bg-stone-800 hover:bg-stone-700 px-3 py-1.5 rounded-lg transition-colors cursor-pointer">Cerrar (ESC)</button>
            </div>
            <div class="flex-1 overflow-y-auto bg-stone-950 p-4 current-scrollbar">
                <img :src="modalImage" :alt="modalTitle" class="w-full h-auto rounded-lg shadow-sm">
            </div>
        </div>
    </div>

</section>
@endsection