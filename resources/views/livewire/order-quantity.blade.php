<div>
    @livewireStyles
    @livewireScripts

    <!-- Decrease Quantity Button -->
    <button class="py-2 px-4 bg-gray-200 rounded-lg" onclick="decreaseQuantity('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')" wire:click="decreaseQuantity">-</button>

    <!-- Quantity Input -->
    <input id="chosenQuantity{{ $order->id }}" type="number" min="1" class="w-24 text-center py-2 bg-gray-100 outline-none border-transparent focus:border-transparent focus:ring-0" value="{{ $order->quantity_chosen }}" onchange="updateTotalPrice('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')" wire:model="quantity" >

    <!-- Increase Quantity Button -->
    <button class="py-2 px-4 bg-gray-200 rounded-lg" onclick="increaseQuantity('chosenQuantity{{ $order->id }}', '{{ $order->orderedItem->price }}')" wire:click="increaseQuantity">+</button>
</div>