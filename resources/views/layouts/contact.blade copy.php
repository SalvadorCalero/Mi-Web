@extends('layouts.app')

@section('title', 'Contacto Profesional')

@section('content')
    <section class="max-w-2xl mx-auto py-8 px-2">
        
        <div class="text-center mb-10">
            <h1 class="font-titulos font-bold text-3xl text-textoPrincipal tracking-tight">
                ¿Necesitas una página web profesional para tu negocio?
            </h1>
            <p class="font-fuentePrincipal text-textoCuerpo text-sm md:text-base mt-2">
                Tanto si necesitas una nueva página web como si quieres mejorar la actual, estaré encantado de ayudarte.
            </p>
        </div>

        {{-- Alerta de éxito con los colores de la paleta --}}
        @if(session('success'))
            <div class="mb-6 p-4 bg-emerald-50 border border-emerald-200 text-emerald-800 rounded-lg font-fuentePrincipal text-sm shadow-sm flex items-center gap-2">
                <svg class="w-5 h-5 text-emerald-600 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="bg-white border border-stone-200/70 rounded-xl p-6 md:p-8 shadow-sm space-y-6">
            
            {{-- Token de seguridad obligatorio de Laravel contra ataques de suplantación cross-site --}}
            @csrf

            <div>
                <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-2">Nombre completo:</label>
                <input type="text" name="name" value="{{ old('name') }}" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors" placeholder="Ej. Juan Pérez" required>
                @error('name')
                    <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-2">Dirección de email:</label>
                <input type="email" name="email" value="{{ old('email') }}" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors" placeholder="juan@ejemplo.com" required>
                @error('email')
                    <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label class="block font-fuentePrincipal text-sm font-medium text-textoPrincipal mb-2">Detalles del proyecto:</label>
                <textarea name="message" rows="5" class="w-full font-fuentePrincipal text-sm border border-stone-200 rounded-lg px-4 py-2.5 bg-fondoGeneral/50 focus:outline-none focus:border-botonEnlace transition-colors resize-none" placeholder="Cuéntame qué necesitas. Por ejemplo: una página web para mi empresa, renovar una web existente, una tienda online o cualquier otra idea que tengas en mente." required>{{ old('message') }}</textarea>
                @error('message')
                    <p class="text-red-700 text-xs mt-1.5 font-fuentePrincipal font-medium">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="w-full bg-botonEnlace hover:bg-orange-800 text-white font-fuentePrincipal font-medium py-3 px-4 rounded-lg shadow-sm transition-colors cursor-pointer text-center text-sm">
                Enviar consulta
            </button>
        </form>
    </section>
@endsection