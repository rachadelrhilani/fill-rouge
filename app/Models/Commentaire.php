<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $fillable = ['Contenu', 'tache_id'];

    public function tache(){
        return $this->belongsTo(Tache::class);
    }
}
