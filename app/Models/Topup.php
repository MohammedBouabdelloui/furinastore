<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topup extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'price',
        'topup_value',
        'description',
        'is_available',
        'picture'
    ];
}
