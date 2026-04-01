<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Absence;
use App\Models\Tache;
use Illuminate\Http\JsonResponse;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function getStatsData(): JsonResponse
    {
        $today = Carbon::today();

        // 1. Total des collaborateurs (exclure les admins si nécessaire)
        $totalCollab = User::whereIn('role', ['employe', 'manager'])->count();

        // 2. Absences aujourd'hui (Vérifier si aujourd'hui est entre date_debut et date_fin)
        $absencesToday = Absence::where('statut', 'approuve')
            ->whereDate('date_debut', '<=', $today)
            ->whereDate('date_fin', '>=', $today)
            ->count();

        // 3. Taux d'occupation (Exemple : Tâches en cours vs Total)
        $totalTaches = Tache::count();
        $tachesEnCours = Tache::where('statut', 'en_cours')->count();
        
        // Calcul du pourcentage (éviter division par zéro)
        $tauxOccupation = ($totalTaches > 0) ? round(($tachesEnCours / $totalTaches) * 100) : 0;

        // 4. Heures prévues (Si tu n'as pas de colonne heures, on peut compter les tâches à faire)
        $tachesAfaire = Tache::where('statut', 'a_faire')->count();

        return response()->json([
            'total_collaborateurs' => $totalCollab,
            'taux_occupation' => $tauxOccupation,
            'absences_today' => $absencesToday,
            'taches_a_faire' => $tachesAfaire, // On adapte selon tes colonnes réelles
        ]);
    }
}