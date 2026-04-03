<?php

namespace App\Repositories;

use App\Models\Departement;
use App\Interfaces\DepartementRepositoryInterface;

class DepartementRepository implements DepartementRepositoryInterface
{
    public function getAllByEntreprise($entrepriseId)
    {
        return Departement::where('entreprise_id', $entrepriseId)->get();
    }

    public function getById($id)
    {
        return Departement::findOrFail($id);
    }

    public function store(array $data)
    {
        return Departement::create($data);
    }

    public function update($id, array $data)
    {
        $departement = Departement::findOrFail($id);
        $departement->update($data);
        return $departement;
    }

    public function delete($id)
    {
        return Departement::destroy($id);
    }
}