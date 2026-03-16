<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'nom',
        'description',
        'entreprise_id'
    ];

    /**
     * Un département appartient à une entreprise.
     */
    public function entreprise()
    {
        return $this->belongsTo(Entreprise::class);
    }

    public function utilisateurs()
    {
        return $this->hasMany(User::class);
    }
}
