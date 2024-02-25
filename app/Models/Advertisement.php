<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use HasFactory;
    use SoftDeletes;
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
