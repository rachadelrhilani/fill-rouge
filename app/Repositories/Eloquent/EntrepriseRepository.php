<?php
namespace App\Repositories\Eloquent;

use App\Models\Entreprise;
use App\Repositories\Interfaces\EntrepriseRepositoryInterface;

class EntrepriseRepository implements EntrepriseRepositoryInterface {
    public function create(array $data) {
        return Entreprise::create([
            'nom' => $data['company'],
            'statut' => 'actif',
            'dateCreation' => now(),
        ]);
    }
}