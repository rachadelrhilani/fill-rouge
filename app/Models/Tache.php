<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tache extends Model
{
    protected $fillable = ['titre', 'priorite', 'statut', 'dateEcheance', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function commentaires(){
        return $this->hasMany(Commentaire::class);
    }
}
