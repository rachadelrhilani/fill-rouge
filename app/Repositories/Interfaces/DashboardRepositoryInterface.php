<?php
namespace App\Repositories\Interfaces;

interface DashboardRepositoryInterface
{
    public function getCountByRoles(array $roles): int;
    public function getActiveAbsencesCount(): int;
    public function getTasksStats(): array;
}