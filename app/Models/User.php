<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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

    public function Bantens (): HasMany {
        return $this->hasMany(Banten::class);
    }
    public function Jakartas (): HasMany {
        return $this->hasMany(Jakarta::class);
    }
    public function Jawabarats (): HasMany {
        return $this->hasMany(JawaBarat::class);
    }
    public function Jawatengahs (): HasMany {
        return $this->hasMany(JawaTengah::class);
    }
    public function Jawatimurs (): HasMany {
        return $this->hasMany(JawaTimur::class);
    }
    public function Yogyakartas (): HasMany {
        return $this->hasMany(JawaYogyakarta::class);
    }
}
