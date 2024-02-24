<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'title',
        'user_id',
        'price',
        'account_level',
        'server',
        'platform',
        'player',
        'picture',
        'description',
        'is_available',
    ];
}
