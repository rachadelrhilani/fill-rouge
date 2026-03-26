<?php
namespace App\Repositories;

use App\Interfaces\EntrepriseRepositoryInterface;
use App\Models\Entreprise;

class EntrepriseRepository implements EntrepriseRepositoryInterface {
    public function create(array $data) {
        return Entreprise::create([
            'nom' => $data['company'],
            'statut' => 'actif',
            'dateCreation' => now(),
        ]);
    }
}