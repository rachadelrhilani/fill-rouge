<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = ['date', 'type', 'user_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function horaire(){
        return $this->hasOne(Horaire::class);
    }
}
