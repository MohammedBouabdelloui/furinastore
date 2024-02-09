<?php

namespace App\Models;


use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'birth_date',
        'gender',
        'user_instagram',
        'has_whatsapp',
        'user_facebook',
        'account_status',
        'profile_picture',
        'password',
        'confirmation_code',
    ];

    protected $hidden = [
        'password',
    ];
}
