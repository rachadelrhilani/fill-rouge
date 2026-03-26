<?php
namespace App\Repositories;

use App\Models\Entreprise;

class EntrepriseRepository {
    public function create(array $data) {
        return Entreprise::create([
            'nom' => $data['company'],
            'statut' => 'actif',
            'dateCreation' => now(),
        ]);
    }
}