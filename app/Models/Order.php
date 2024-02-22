<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use App\Models\ProductOrder;
class Order extends Model
{
    use HasFactory;

    public function productOrders() : hasMany
    {
        return $this->hasMany(ProductOrder::class);
    }
}
