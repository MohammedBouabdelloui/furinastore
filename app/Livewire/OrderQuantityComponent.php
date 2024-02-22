<?php

namespace App\Livewire;

use App\Models\ProductOrder;
use Livewire\Component;

class OrderQuantityComponent extends Component
{
    public $orderId;
    public $quantity;
    public $order;
    public $price;

    public function mount($orderId, $quantity, $order, $price)
    {
        $this->orderId = $orderId;
        $this->quantity = $quantity;
        $this->order = $order;
        $this->price = $price;
        
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
        $order = ProductOrder::find($this->orderId);
        if ($order) {
            $order->quantity_chosen = $this->quantity;
            $order->price = $this->quantity * $this->price;
            $order->save();
        }
        // You can emit an event if you need to notify other components about the change.
    }

    public function render()
    {
        // $totalPrice = ProductOrder::sum('price');
        // return view('livewire.order-quantity', ['totalPrice' => $totalPrice]);
        return view('livewire.order-quantity');
    }
}
