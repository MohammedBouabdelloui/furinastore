<?php

namespace App\Models;

use App\Models\ProductOrder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'order_status',
    ];

    public function productOrders() 
    {
        return $this->hasMany(ProductOrder::class);
    }

    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
