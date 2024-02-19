<?php

namespace App\Models;



use App\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Relations\HasOne;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'country_id',
        'role_id',
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
        'socail_id',
        'socail_type',
    ];

    protected $hidden = [
        'password','socail_id'
    ];

    public function role(){
        return $this->belongsTo(Role::class, 'role_id');
    }
    
    public function productOrders(): HasMany
    {
        return $this->hasMany(ProductOrder::class);
    }
    
}
