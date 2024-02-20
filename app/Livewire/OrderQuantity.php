<?php
// app/Http/Livewire/OrderQuantity.php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Order;

class OrderQuantity extends Component
{
    public $orderId;
    public $quantity;

    public function mount($orderId, $quantity)
    {
        $this->orderId = $orderId;
        $this->quantity = $quantity;
    }

    public function decreaseQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
            $this->updateQuantity();
        }
    }

    public function increaseQuantity()
    {
        $this->quantity++;
        $this->updateQuantity();
    }

    private function updateQuantity()
    {
        $order = Order::find($this->orderId);
        if ($order) {
            $order->quantity_chosen = $this->quantity;
            $order->save();
        }
        // You can emit an event if you need to notify other components about the change.
    }

    public function render()
    {
        return view('livewire.order-quantity');
    }
}
