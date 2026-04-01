@extends('layouts.app')

@section('title', 'Tableau de bord Admin | HRFlow')

@section('content')
<div class="space-y-8 font-body">


    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
    <div class="bg-white p-6 rounded-[24px] shadow-sm flex flex-col gap-4">
        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Total Collaborateurs</p>
            <h3 id="stat-collab" class="text-3xl font-bold text-gray-800 font-display animate-pulse text-gray-300">---</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[24px] shadow-sm flex flex-col gap-4">
        <div class="w-10 h-10 rounded-lg bg-indigo-50 flex items-center justify-center text-indigo-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
            </svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Taux d'occupation</p>
            <h3 id="stat-occupation" class="text-3xl font-bold text-gray-800 font-display animate-pulse text-gray-300">---</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[24px] shadow-sm flex flex-col gap-4">
        <div class="w-10 h-10 rounded-lg bg-red-50 flex items-center justify-center text-red-600">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Absences aujourd'hui</p>
            <h3 id="stat-absences" class="text-3xl font-bold text-gray-800 font-display animate-pulse text-gray-300">---</h3>
        </div>
    </div>

    <div class="bg-white p-6 rounded-[24px] shadow-sm flex flex-col gap-4">
        <div class="w-10 h-10 rounded-lg bg-blue-50 flex items-center justify-center text-blue-500">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        </div>
        <div>
            <p class="text-sm font-medium text-gray-500">Tâches à faire</p>
            <h3 id="stat-taches" class="text-3xl font-bold text-gray-800 font-display animate-pulse text-gray-300">---</h3>
        </div>
    </div>
</div>

    <div class="max-w-3xl mx-auto bg-white rounded-[32px] shadow-sm p-8 mt-12">
        <div class="flex justify-between items-center mb-8">
            <h4 class="font-display text-lg font-bold text-gray-800">Alertes & Activités</h4>
            <a href="#" class="text-xs font-semibold text-blue-600 hover:underline">Voir tout</a>
        </div>

        <div class="space-y-6">
            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-orange-100 flex items-center justify-center flex-shrink-0 text-orange-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M8.257 3.099c.433-.798 1.58-.798 2.013 0l6.305 11.226c.426.757-.102 1.685-.964 1.685H4.43c-.862 0-1.39-.928-.964-1.685l6.305-11.226zM11 12a1 1 0 11-2 0 1 1 0 012 0zm-1-7a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-gray-800">Conflit de planning</p>
                    <p class="text-xs text-gray-500 mt-0.5">Sophie et Marc sur le même créneau.</p>
                    <span class="text-[10px] text-gray-400 font-medium">Il y a 5 min</span>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0 text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-gray-800">Nouveau collaborateur</p>
                    <p class="text-xs text-gray-500 mt-0.5">Thomas Martin a rejoint l'équipe Marketing.</p>
                    <span class="text-[10px] text-gray-400 font-medium">Il y a 2h</span>
                </div>
            </div>

            <div class="flex items-start gap-4">
                <div class="w-10 h-10 rounded-full bg-blue-100 flex items-center justify-center flex-shrink-0 text-blue-500">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div>
                    <p class="text-sm font-bold text-gray-800">Congés validés</p>
                    <p class="text-xs text-gray-500 mt-0.5">Demande de congés de Julie approuvée.</p>
                    <span class="text-[10px] text-gray-400 font-medium">Il y a 4h</span>
                </div>
            </div>
        </div>

        <button class="w-full mt-8 py-3 border border-gray-100 rounded-xl text-xs font-bold text-gray-500 hover:bg-gray-50 transition">
            Vider les alertes
        </button>
    </div>
</div>
@endsection
<script>
    document.addEventListener('DOMContentLoaded', () => {
        
        async function refreshStats() {
            try {
                // 1. On récupère les données de ton controller
                const response = await fetch("{{ route('admin.stats.data') }}");
                const data = await response.json();

                // 2. On crée un dictionnaire qui lie tes IDs HTML aux données JSON
                const statsMap = {
                    'stat-collab': data.total_collaborateurs,
                    'stat-occupation': data.taux_occupation + '%',
                    'stat-absences': data.absences_today,
                    'stat-heures': data.taches_a_faire // ou data.heures_prevues
                };

                // 3. On met à jour chaque élément automatiquement
                for (const [id, value] of Object.entries(statsMap)) {
                    const element = document.getElementById(id);
                    if (element) {
                        element.classList.remove('animate-pulse'); // On arrête le clignotement
                        element.innerText = value;
                    }
                }

            } catch (error) {
                console.error("Problème de connexion aux statistiques");
            }
        }

        // Lancer au chargement de la page
        refreshStats();

        // Relancer toutes les 5 minutes
        setInterval(refreshStats, 300000);
    });
</script>