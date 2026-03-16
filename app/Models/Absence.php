<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    protected $fillable = [
        'date_debut', 'date_fin', 'type', 'statut', 
        'motif', 'date_demande', 'user_id'
    ];

    protected $casts = [
        'date_debut' => 'date',
        'date_fin' => 'date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
