<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nom', 'email', 'password', 'role', 
        'niveauResponsabilite', 'statut', 'poste', 
        'entreprise_id', 'departement_id'
    ];

    // Relations
    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function departement(){
        return $this->belongsTo(Departement::class);
    }

    public function notifications(){
        return $this->hasMany(Notification::class);
    }

    public function absences(){
        return $this->hasMany(Absence::class);
    }

    public function plannings(){
        return $this->hasMany(Planning::class);
    }

    // Tâches assignées à l'utilisateur
    public function taches(){
        return $this->hasMany(Tache::class, 'user_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
