<?php
namespace App\Repositories\Eloquent;

use App\Models\User;
use App\Models\Absence;
use App\Models\Tache;
use App\Repositories\Interfaces\DashboardRepositoryInterface;
use Carbon\Carbon;

class DashboardRepository implements DashboardRepositoryInterface
{
    public function getCountByRoles(array $roles): int
    {
        return User::whereIn('role', $roles)->count();
    }

    public function getActiveAbsencesCount(): int
    {
        $today = Carbon::today();
        return Absence::where('statut', 'approuve')
            ->whereDate('date_debut', '<=', $today)
            ->whereDate('date_fin', '>=', $today)
            ->count();
    }

    public function getTasksStats(): array
    {
        return [
            'total' => Tache::count(),
            'en_cours' => Tache::where('statut', 'en_cours')->count(),
            'a_faire' => Tache::where('statut', 'a_faire')->count(),
        ];
    }
}