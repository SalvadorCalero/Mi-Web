<!DOCTYPE html>
<html lang="es" class="h-full bg-fondoGeneral">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.T. Dev - @yield('title', 'Desarrollador Freelance')</title>
    
    <!-- 1. Carga de Fuentes desde Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">


    <!-- 3. COMPILADOR VITE/TAILWIND -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-full font-fuentePrincipal bg-fondoGeneral text-textoCuerpo antialiased">

    <!-- ==========================================
         HEADER FLOTANTE FIJO (Ancho simétrico al 70% / max-w-5xl)
         ========================================== -->
<header class="sticky top-4 z-50 w-full max-w-5xl mx-auto px-4 sm:px-6" x-data="{ mobileMenuOpen: false }">
        <div class="bg-white/90 backdrop-blur-md border border-stone-200/60 rounded-xl shadow-sm p-4">
            <div class="flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex-shrink-0 w-32 h-8 flex items-center justify-center">
                    <div class="flex-shrink-0 w-32 h-8 flex items-center justify-center text-xs font-titulos tracking-wider text-stone-400 uppercase">
                        <img src="{{ asset('img/logo/logo4.webp') }}" alt="Logo Calero Estudio" class="w-full h-auto object-contain"> 
                    </div>
                </a>

                <nav class="hidden md:flex items-center gap-6 text-sm font-medium">
                    <a href="{{ route('home') }}" 
                       class="{{ request()->routeIs('home') ? 'text-botonEnlace font-semibold' : 'text-textoCuerpo hover:text-botonEnlace' }} transition-colors">
                        Inicio
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="{{ request()->routeIs('portfolio') ? 'text-botonEnlace font-semibold' : 'text-textoCuerpo hover:text-botonEnlace' }} transition-colors">
                        Proyectos
                    </a>
                    <a href="{{ route('about') }}" 
                       class="{{ request()->routeIs('about') ? 'text-botonEnlace font-semibold' : 'text-textoCuerpo hover:text-botonEnlace' }} transition-colors">
                        Sobre Mí
                    </a>
                    <a href="{{ route('contact.index') }}" 
                       class="{{ request()->routeIs('contact.index') ? 'text-botonEnlace font-semibold' : 'text-textoCuerpo hover:text-botonEnlace' }} transition-colors">
                        Contacto
                    </a>
                </nav>

                <div class="hidden sm:block flex-shrink-0">
                    <a href="{{ route('contact.index') }}" class="inline-block bg-botonEnlace hover:bg-orange-800 text-white font-medium text-xs uppercase tracking-wider px-4 py-2 rounded-md transition-colors shadow-sm">
                        Presupuesto
                    </a>
                </div>

                <div class="flex items-center md:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" 
                            type="button" 
                            class="p-1.5 rounded-lg text-textoCuerpo hover:text-textoPrincipal hover:bg-stone-100 transition-colors focus:outline-none cursor-pointer"
                            aria-label="Abrir navegación móvil">
                        
                        <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                        
                        <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-cloak>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>

            </div>

            <div x-show="mobileMenuOpen" 
                 x-transition:enter="transition ease-out duration-200"
                 x-transition:enter-start="opacity-0 -translate-y-2"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 x-transition:leave="transition ease-in duration-150"
                 x-transition:leave-start="opacity-100 translate-y-0"
                 x-transition:leave-end="opacity-0 -translate-y-2"
                 class="md:hidden mt-4 pt-4 border-t border-stone-100"
                 @click.away="mobileMenuOpen = false"
                 x-cloak>
                
                <nav class="flex flex-col gap-3 text-base font-medium font-fuentePrincipal">
                    <a href="{{ route('home') }}" 
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('home') ? 'bg-stone-50 text-botonEnlace font-semibold' : 'text-textoCuerpo hover:bg-stone-50 hover:text-botonEnlace' }} transition-all">
                        Inicio
                    </a>
                    <a href="{{ route('portfolio') }}" 
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('portfolio') ? 'bg-stone-50 text-botonEnlace font-semibold' : 'text-textoCuerpo hover:bg-stone-50 hover:text-botonEnlace' }} transition-all">
                        Proyectos
                    </a>
                    <a href="{{ route('about') }}" 
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('about') ? 'bg-stone-50 text-botonEnlace font-semibold' : 'text-textoCuerpo hover:bg-stone-50 hover:text-botonEnlace' }} transition-all">
                        Sobre Mí
                    </a>
                    <a href="{{ route('contact.index') }}" 
                       class="px-3 py-2 rounded-lg {{ request()->routeIs('contact.index') ? 'bg-stone-50 text-botonEnlace font-semibold' : 'text-textoCuerpo hover:bg-stone-50 hover:text-botonEnlace' }} transition-all">
                        Contacto
                    </a>
                    
                    <div class="sm:hidden pt-2 border-t border-stone-100">
                        <a href="{{ route('contact.index') }}" class="w-full text-center block bg-botonEnlace hover:bg-orange-800 text-white font-medium text-xs uppercase tracking-wider py-2.5 rounded-lg transition-colors shadow-sm">
                            Presupuesto
                        </a>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- ==========================================
         CONTENIDO DINÁMICO PRINCIPAL
         ========================================== -->
    <main class="flex-grow w-full max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-4">
        @yield('content')
    </main>

    <!-- ==========================================
         FOOTER SIMÉTRICO (Ancho alineado al 70% / max-w-5xl)
         ========================================== -->
    <footer class="w-full bg-fondoGeneral border-t border-stone-200 mt-16 font-fuentePrincipal text-sm">
        
        <div class="max-w-5xl mx-auto px-6 sm:px-8 md:px-12 py-12 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 text-center sm:text-left">
            
            <div class="flex flex-col items-center sm:items-start space-y-4">
                <a href="{{ url('/') }}" class="flex-shrink-0 w-32 h-8 flex items-center justify-center">
                    <div class="flex-shrink-0 w-32 h-8 flex items-center justify-center text-xs font-titulos tracking-wider text-stone-400 uppercase">
                        <img src="{{ asset('img/logo/logo4.webp') }}" alt="Logo Calero Estudio" class="w-full h-auto object-contain"> 
                    </div>
                </a>
                <p class="text-xs text-stone-400 leading-relaxed max-w-xs">
                    Desarrollo web a medida bajo arquitecturas estables y escalables.
                </p>
            </div>

            <div>
                <h3 class="font-titulos font-semibold text-textoPrincipal text-xs uppercase tracking-wider mb-4">Explorar</h3>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="{{ route('home') }}" 
                           class="{{ request()->routeIs('home') ? 'text-botonEnlace font-medium' : 'text-textoCuerpo' }} hover:text-botonEnlace transition-colors">
                            Inicio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" 
                           class="{{ request()->routeIs('portfolio') ? 'text-botonEnlace font-medium' : 'text-textoCuerpo' }} hover:text-botonEnlace transition-colors">
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('about') }}" 
                           class="{{ request()->routeIs('about') ? 'text-botonEnlace font-medium' : 'text-textoCuerpo' }} hover:text-botonEnlace transition-colors">
                            Sobre Mí
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contact.index') }}" 
                           class="{{ request()->routeIs('contact.index') ? 'text-botonEnlace font-medium' : 'text-textoCuerpo' }} hover:text-botonEnlace transition-colors">
                            Contacto
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h3 class="font-titulos font-semibold text-textoPrincipal text-xs uppercase tracking-wider mb-4">Legal</h3>
                <ul class="space-y-2 text-sm">
                    <li><a href="#" class="text-textoCuerpo hover:text-botonEnlace transition-colors">Aviso Legal</a></li>
                    <li><a href="#" class="text-textoCuerpo hover:text-botonEnlace transition-colors">Política de Cookies</a></li>
                    <li><a href="#" class="text-textoCuerpo hover:text-botonEnlace transition-colors">Política de Privacidad</a></li>
                    <li><a href="#" class="text-textoCuerpo hover:text-botonEnlace transition-colors">Declaración de Accesibilidad</a></li>
                </ul>
            </div>

            <div class="flex flex-col items-center sm:items-start">
                <h3 class="font-titulos font-semibold text-textoPrincipal text-xs uppercase tracking-wider mb-4">Contacto</h3>
                <ul class="space-y-2 text-stone-500 mb-4 w-full">
                    <li class="flex items-center justify-center sm:justify-start gap-1.5 text-xs"><span>📧</span> info@tu-dominio.com</li>
                    <li class="flex items-center justify-center sm:justify-start gap-1.5 text-xs"><span>📞</span> +34 600 000 000</li>
                </ul>
                <div class="flex items-center justify-center sm:justify-start gap-3 text-xs text-stone-400 font-medium">
                    <a href="https://github.com" target="_blank" rel="noopener noreferrer" class="hover:text-botonEnlace transition-colors">GitHub</a>
                    <span>•</span>
                    <a href="https://linkedin.com" target="_blank" rel="noopener noreferrer" class="hover:text-botonEnlace transition-colors">LinkedIn</a>
                    </div>
            </div>

        </div>

        <div class="border-t border-stone-100 bg-stone-50/50">
            <div class="max-w-5xl mx-auto px-6 sm:px-8 py-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-stone-400 text-center sm:text-left">
                <div>
                    &copy; {{ date('Y') }} M.T. Dev. Todos los derechos reservados.
                </div>
                <div class="font-medium text-stone-500">
                    Diseñado y Programado por <span class="text-textoPrincipal font-semibold">Salvador</span>
                </div>
            </div>
        </div>

    </footer>

</body>
</html>