<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Topup extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title',
        'price',
        'topup_value',
        'description',
        'is_available',
        'picture'
    ];
    protected $dates = ['deleted_at'];
}
