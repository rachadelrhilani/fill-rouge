<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
    protected $fillable = ['heureDebut', 'heureFin', 'planning_id'];

    public function planning(){
        return $this->belongsTo(Planning::class);
    }
}
