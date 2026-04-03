<?php

namespace App\Services;

use App\Interfaces\DepartementRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class DepartementService
{
    protected $repository;

    public function __construct(DepartementRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function listDepartements()
    {
        return $this->repository->getAllByEntreprise(Auth::user()->entreprise_id);
    }

    public function createDepartement(array $data)
    {
        // On injecte l'entreprise_id de l'admin actuel
        $data['entreprise_id'] = Auth::user()->entreprise_id;
        return $this->repository->store($data);
    }

    public function updateDepartement($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteDepartement($id)
    {
        return $this->repository->delete($id);
    }
}