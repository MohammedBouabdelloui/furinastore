<?php

namespace App\Models;


use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Notifications\Notifiable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends AuthenticatableUser implements Authenticatable
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
    ];

    protected $hidden = [
        'password',
    ];
}
