<?php

namespace App\Livewire;

use App\Models\ProductOrder;
use Livewire\Component;

class TotalPrice extends Component
{
    public function render()
    {
        $totalPrice = ProductOrder::sum('price');
        return view('livewire.total-price', ['totalPrice' => $totalPrice]);
    }
}
