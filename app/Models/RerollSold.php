<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RerollSold extends Model
{
    use HasFactory;

    protected $fillable = [
        'reroll_id',
        'description',
    ];

    public function reroll()
    {
        return $this->belongsTo(Reroll::class);
    }
}
