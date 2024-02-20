<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

        public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function productOrder(): MorphMany
    {
        return $this->morphMany(ProductOrder::class, 'orderedItem', 'ordered_table_type', 'ordered_item_id');
    }
}
