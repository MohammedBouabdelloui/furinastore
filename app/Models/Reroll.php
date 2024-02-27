<?php

namespace App\Models;

use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reroll extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'price',
        'description',
        'is_available',
        'account_level',
        'platform',
        'source',
        'server',
        'number_sales',
        'picture'
    ];

    public function rerollsolds()
    {
        return $this->hasMany(RerollSold::class);
    }
}
