<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SecretaryInformation extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'type_id',
        'user_id',
        'name',
        'last_name',
        'hospital_id',
        'user',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Se recupera la informacion relacionada por llave foranea
    public function hospital()
    {
        return $this->belongsTo(HospitalInformation::class);
    }
}
