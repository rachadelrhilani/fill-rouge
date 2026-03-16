<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $fillable = ['email', 'role', 'token', 'statut', 'dateExpiration', 'entreprise_id'];
    
    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }
}
