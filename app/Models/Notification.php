<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    protected $fillable = [
        'titre',
        'message',
        'type',
        'lu',
        'user_id'
    ];

    /**
     * Laravel gère automatiquement 'created_at' comme date de notification.
     * On caste 'lu' en booléen pour plus de facilité.
     */
    protected $casts = [
        'lu' => 'boolean',
    ];

    /**
     * Une notification appartient à un utilisateur.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
