<?php
namespace App\Services;

use App\Repositories\Interfaces\DashboardRepositoryInterface;

class DashboardService
{
    protected $repository;

    public function __construct(DashboardRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAdminDashboardStats(): array
    {
        $taskData = $this->repository->getTasksStats();
        
        // Logique de calcul du taux d'occupation
        $total = $taskData['total'];
        $taux = ($total > 0) ? round(($taskData['en_cours'] / $total) * 100) : 0;

        return [
            'total_collaborateurs' => $this->repository->getCountByRoles(['employe', 'manager']),
            'taux_occupation'      => $taux,
            'absences_today'       => $this->repository->getActiveAbsencesCount(),
            'taches_a_faire'       => $taskData['a_faire'],
        ];
    }
}