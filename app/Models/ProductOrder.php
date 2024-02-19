<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ordered_item_id',
        'ordered_table_type',
        'value_chosen',
        'server',
        'genshin_account_id',
        'quantity_chosen',
        'price',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderedItem(): MorphTo
    {
        return $this->morphTo(__FUNCTION__, 'ordered_table_type', 'ordered_item_id');
    }
}
