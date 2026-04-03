@extends('layouts.app')

@section('title', 'Configuration | HRFlow')

@section('content')
<div class="flex-grow p-8 space-y-8 font-body">
    
    {{-- Header de la page --}}
    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800 font-display">Configuration</h1>
        <div class="relative">
            <input type="text" placeholder="Rechercher un membre..." class="bg-white border-none rounded-xl px-4 py-2 text-sm shadow-sm w-64 focus:ring-2 focus:ring-blue-500">
        </div>
    </div>

    {{-- SECTION 1 : CRÉER UN DÉPARTEMENT --}}
    <div class="bg-white rounded-[24px] p-8 shadow-sm border border-gray-100">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800">Créer un nouveau département</h2>
            <p class="text-gray-400 text-sm">Définissez les structures organisationnelles de votre entreprise.</p>
        </div>

        <form action="#" class="space-y-6">
            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Nom du département</label>
                <input type="text" placeholder="ex: Marketing" class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                <textarea rows="4" placeholder="Décrivez brièvement les responsabilités du département..." class="w-full bg-gray-50 border border-gray-200 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-blue-500 transition"></textarea>
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold px-8 py-3 rounded-xl transition shadow-lg shadow-blue-200">
                    Ajouter le département
                </button>
            </div>
        </form>
    </div>

    {{-- SECTION 2 : MATRICE DES PERMISSIONS --}}
    <div class="bg-white rounded-[24px] p-8 shadow-sm border border-gray-100">
        <div class="mb-6">
            <h2 class="text-xl font-bold text-gray-800">Matrice des permissions</h2>
            <p class="text-gray-400 text-sm">Gérez les droits d'accès par rôle utilisateur.</p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="text-gray-400 text-[10px] uppercase tracking-widest border-b border-gray-50">
                        <th class="pb-4 font-semibold">Rôle</th>
                        <th class="pb-4 font-semibold text-center">Administrateur</th>
                        <th class="pb-4 font-semibold text-center">Manager</th>
                        <th class="pb-4 font-semibold text-center">Employé</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50 text-sm font-medium">
                    {{-- Ligne Tableau de bord --}}
                    <tr>
                        <td class="py-4 text-gray-700">Tableau de bord</td>
                        <td class="py-4 text-center">
                            <input type="checkbox" checked disabled class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                        <td class="py-4 text-center">
                            <input type="checkbox" checked class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                        <td class="py-4 text-center">
                            <input type="checkbox" checked class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                    </tr>
                    {{-- Ligne Gestion RH --}}
                    <tr>
                        <td class="py-4 text-gray-700">Gestion RH</td>
                        <td class="py-4 text-center">
                            <input type="checkbox" checked class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                        <td class="py-4 text-center">
                            <input type="checkbox" checked class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                        <td class="py-4 text-center">
                            <input type="checkbox" class="w-5 h-5 text-blue-600 rounded-full border-gray-300 focus:ring-0">
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection