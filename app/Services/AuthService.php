<?php
namespace App\Services;

use App\Interfaces\UserRepositoryInterface;
use App\Interfaces\EntrepriseRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthService {
    protected $userRepo;
    protected $entrepriseRepo;

    // On injecte les INTERFACES ici
    public function __construct(
        UserRepositoryInterface $userRepo, 
        EntrepriseRepositoryInterface $entrepriseRepo
    ) {
        $this->userRepo = $userRepo;
        $this->entrepriseRepo = $entrepriseRepo;
    }

    public function register(array $data) {
        return DB::transaction(function () use ($data) {
            $entreprise = $this->entrepriseRepo->create($data);

            return $this->userRepo->create([
                'nom'           => $data['name'],
                'email'         => $data['email'],
                'password'      => Hash::make($data['password']),
                'role'          => 'admin',
                'statut'        => 'actif',
                'entreprise_id' => $entreprise->id,
            ]);
        });
    }
}