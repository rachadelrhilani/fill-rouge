<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $fillable = ['nom', 'statut', 'dateCreation'];

    public function utilisateurs(){
        return $this->hasMany(User::class);
    }

    public function invitations() {
        return $this->hasMany(Invitation::class);
    }
}
