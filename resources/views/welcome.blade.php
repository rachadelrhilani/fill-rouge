@extends('layouts.public')

@section('title', 'Accueil | EmployeeFlow')

@section('content')
   <section class="relative h-[600px] flex items-center overflow-hidden">
        {{-- Image de fond avec Overlay --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('images/hero-office.jpg') }}" alt="Bureau" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gray-900/60 shadow-inner"></div> {{-- Filtre sombre pour la lisibilité --}}
        </div>

        {{-- Contenu Hero --}}
        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-2xl">

                <h1 class="text-5xl md:text-6xl font-display font-bold text-white leading-tight">
                    Gérez vos équipes en <br>
                    <span class="text-blue-500">toute simplicité</span>
                </h1>

                <p class="mt-6 text-gray-300 text-lg leading-relaxed max-w-lg">
                    Simplifiez vos processus RH avec notre plateforme tout-en-un. 
                    Suivi du temps, congés et paie réunis au même endroit pour une productivité décuplée.
                </p>

                <div class="mt-10">
                    <a href="{{ route('register') }}" 
                       class="inline-block px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-xl transition-all shadow-lg shadow-blue-900/20 transform hover:-translate-y-1">
                        Commencer gratuitement
                    </a>
                </div>
            </div>
        </div>
    </section>
    {{-- Section Fonctionnalités Clés --}}
    <section class="bg-[#DBEAFE] py-24">
        <div class="container mx-auto px-6">
            
            {{-- En-tête de section --}}
            <div class="max-w-3xl mb-16">
                <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">
                    Fonctionnalités clés
                </span>
                <h2 class="text-4xl font-display font-bold text-[#111827] mt-4 leading-tight">
                    Tout ce dont vous avez besoin pour gérer vos talents au quotidien
                </h2>
                <p class="text-gray-600 mt-6 text-lg">
                    Nos outils sont conçus pour s'adapter à votre flux de travail, pas l'inverse. Gagnez des heures chaque semaine sur vos tâches administratives.
                </p>
            </div>

            {{-- Grille des fonctionnalités --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                {{-- Carte 1: Suivi du temps --}}
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/center" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#111827] mb-4">Suivi du temps</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        Enregistrez les heures de travail de manière précise et automatisée. Tableaux de bord intuitifs pour une vision claire de la charge de travail.
                    </p>
                    <a href="#" class="text-blue-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">
                        En savoir plus <span class="text-lg">→</span>
                    </a>
                </div>

                {{-- Carte 2: Gestion des congés --}}
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#111827] mb-4">Gestion des congés</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        Gérez les demandes d'absence et les soldes de congés en un clic. Synchronisez automatiquement avec les calendriers d'équipe.
                    </p>
                    <a href="#" class="text-blue-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">
                        En savoir plus <span class="text-lg">→</span>
                    </a>
                </div>

                {{-- Carte 3: Paie simplifiée --}}
                <div class="bg-white p-10 rounded-[32px] shadow-sm hover:shadow-md transition-shadow">
                    <div class="w-12 h-12 bg-blue-50 text-blue-600 rounded-xl flex items-center justify-center mb-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-[#111827] mb-4">Paie simplifiée</h3>
                    <p class="text-gray-500 leading-relaxed mb-6">
                        Générez vos fiches de paie sans erreur et en toute conformité. Intégration directe avec vos outils comptables préférés.
                    </p>
                    <a href="#" class="text-blue-600 font-bold flex items-center gap-2 hover:gap-3 transition-all">
                        En savoir plus <span class="text-lg">→</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    {{-- Section CTA & Mission --}}
    <section class="bg-[#DBEAFE] pb-24">
        <div class="container mx-auto px-6">
            
            {{-- Carte Bleue CTA --}}
            <div class="bg-[#2563EB] rounded-[40px] p-12 md:p-20 text-center mb-24 shadow-2xl shadow-blue-500/20">
                <h2 class="text-3xl md:text-5xl font-display font-bold text-white mb-6">
                    Prêt à transformer votre gestion RH ?
                </h2>
                <p class="text-blue-100 text-lg mb-10 max-w-2xl mx-auto">
                    Rejoignez plus de 5,000 entreprises qui utilisent déjà HRFlow pour libérer leur plein potentiel. Pas de carte bancaire requise.
                </p>
                <a href="{{ route('register') }}" class="inline-block bg-white text-[#2563EB] px-10 py-4 rounded-xl font-bold text-lg hover:bg-blue-50 transition-colors">
                    Créer un compte gratuit
                </a>
            </div>

            {{-- Notre Mission --}}
            <div class="text-center mb-16">
                <h2 class="text-3xl font-display font-bold text-[#111827]">Notre Mission</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                {{-- Collaboration --}}
                <div class="bg-white p-8 rounded-[24px] shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#111827]">Collaboration</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Travailler ensemble pour atteindre des objectifs communs et favoriser l'intelligence collective.
                    </p>
                </div>

                {{-- Transparence --}}
                <div class="bg-white p-8 rounded-[24px] shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#111827]">Transparence</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Un partage ouvert et honnête des informations pour instaurer un climat de confiance durable.
                    </p>
                </div>

                {{-- Innovation --}}
                <div class="bg-white p-8 rounded-[24px] shadow-sm">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-10 h-10 bg-blue-50 text-blue-600 rounded-lg flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-[#111827]">Innovation</h3>
                    </div>
                    <p class="text-sm text-gray-500 leading-relaxed">
                        Un esprit créatif constant pour réinventer les processus RH et anticiper les besoins futurs.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection