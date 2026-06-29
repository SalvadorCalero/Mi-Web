@extends('layouts.app')

@section('title', 'Contacto Profesional')

@section('content')
    <section class="max-w-5xl mx-auto py-8 px-4 sm:px-6">
        
        <div class="text-center mb-12">
            <h1 class="font-titulos font-bold text-3xl md:text-4xl text-textoPrincipal tracking-tight">
                ¿Necesitas una página web profesional para tu negocio?
            </h1>
            <p class="font-fuentePrincipal text-textoCuerpo text-sm md:text-base mt-3 max-w-2xl mx-auto">
                Tanto si necesitas una nueva página web como si quieres mejorar la actual, estaré encantado de ayudarte.
            </p>
        </div>

        {{-- Alerta de éxito con los colores de la paleta --}}
        @if(session('success'))
            <div class="mb-8 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg font-fuentePrincipal text-sm shadow-sm flex items-center gap-2 max-w-5xl mx-auto">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        {{-- Contenedor Principal en Grid de Dos Columnas --}}
        <div class="grid grid-cols-1 md:grid-cols-12 gap-8 items-start">
            
            {{-- BLOQUE IZQUIERDO: Información de contacto propia --}}
            <div class="md:col-span-5 space-y-6">
                <div class="bg-white border border-stone-200/70 rounded-xl p-6 md:p-8 shadow-sm">
                    <h2 class="font-titulos font-bold text-xl text-textoPrincipal mb-6">
                        Información de Contacto
                    </h2>
                    
                    <div class="space-y-4 font-fuentePrincipal text-sm">
                        <div class="flex items-start gap-3">
                            <span class="text-xl mt-0.5">📧</span>
                            <div>
                                <p class="font-semibold text-textoPrincipal">Correo Electrónico</p>
                                <a href="mailto:info@caleroestudio.com" class="text-textoCuerpo hover:text-botonEnlace transition-colors break-all">
                                    info@caleroestudio.com
                                </a>
                            </div>
                        </div>

                        <div class="flex items-start gap-3 pt-2">
                            <span class="text-xl mt-0.5">📞</span>
                            <div>
                                <p class="font-semibold text-textoPrincipal">Teléfono / WhatsApp</p>
                                <a href="tel:+34627934010" class="text-textoCuerpo hover:text-botonEnlace transition-colors">
                                    +34 627 93 40 10
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="border-t border-stone-100 mt-6 pt-6">
                        <p class="font-fuentePrincipal text-xs text-stone-400 leading-relaxed">
                            Si lo prefieres, puedes escribirme directamente por correo o llamarme. Respondo a todas las solicitudes en menos de 24-48 horas laborables.
                        </p>
                    </div>
                </div>
            </div>

            {{-- BLOQUE DERECHO: Formulario con el nuevo campo de teléfono --}}
            <form action="{{ route('contact.send') }}" method="POST" class="md:col-span-7 bg-white border border-stone-200/70 rounded-xl p-6 md:p-8 shadow-sm space-y-5">
                
                {{-- Token de seguridad obligatorio de Laravel --}}
                @csrf

                <div>
                    <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-1.5">Nombre completo:</label>
                    <input type="text" name="name" value="{{ old('name') }}" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors" placeholder="Ej. Juan Pérez" required>
                    @error('name')
                        <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Grid de 2 columnas en pantallas medianas para Email y Teléfono --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-1.5">Dirección de email:</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors" placeholder="juan@ejemplo.com" required>
                        @error('email')
                            <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-1.5">Teléfono de contacto:</label>
                        <input type="tel" name="phone" value="{{ old('phone') }}" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors" placeholder="Ej. 600 00 00 00" required>
                        @error('phone')
                            <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-1.5">Detalles del proyecto:</label>
                    <textarea name="message" rows="4" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors resize-none" placeholder="Cuéntame qué necesitas. Por ejemplo: una página web para mi empresa, renovar una web existente, una tienda online o cualquier otra idea que tengas en mente." required>{{ old('message') }}</textarea>
                    @error('message')
                        <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full bg-botonEnlace hover:bg-orange-800 text-white font-fuentePrincipal font-medium py-3 px-4 rounded-lg shadow-sm transition-colors cursor-pointer text-center text-sm">
                    Enviar consulta
                </button>
            </form>
        </div>

        {{-- BLOQUE INFERIOR: ¿Qué ocurre después? --}}
        <div class="mt-16 bg-white border border-stone-200/70 rounded-xl p-6 md:p-10 shadow-sm max-w-5xl mx-auto">
            <h2 class="font-titulos font-bold text-2xl text-textoPrincipal text-center mb-10">
                ¿Qué ocurre después?
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                
                {{-- Paso 1 --}}
                <div class="flex flex-col items-center text-center space-y-3 px-4">
                    <div class="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-titulos font-bold text-textoPrincipal text-sm">
                        1
                    </div>
                    <h3 class="font-titulos font-semibold text-textoPrincipal text-base">
                        Recibo tu consulta
                    </h3>
                    <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm leading-relaxed">
                        Analizo tu proyecto y sus necesidades de forma personalizada.
                    </p>
                </div>

                {{-- Paso 2 --}}
                <div class="flex flex-col items-center text-center space-y-3 px-4">
                    <div class="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-titulos font-bold text-textoPrincipal text-sm">
                        2
                    </div>
                    <h3 class="font-titulos font-semibold text-textoPrincipal text-base">
                        Te contacto
                    </h3>
                    <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm leading-relaxed">
                        Comentamos los detalles esenciales y resolvemos cualquier duda inicial.
                    </p>
                </div>

                {{-- Paso 3 --}}
                <div class="flex flex-col items-center text-center space-y-3 px-4">
                    <div class="w-10 h-10 rounded-full bg-stone-100 flex items-center justify-center font-titulos font-bold text-textoPrincipal text-sm">
                        3
                    </div>
                    <h3 class="font-titulos font-semibold text-textoPrincipal text-base">
                        Recibes una propuesta
                    </h3>
                    <p class="font-fuentePrincipal text-textoCuerpo text-xs md:text-sm leading-relaxed">
                        Una planificación detallada adaptada a tu negocio y sin ningún compromiso.
                    </p>
                </div>

            </div>
        </div>

    </section>
@endsection