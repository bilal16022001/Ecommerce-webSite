<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use Cart;

class ShopCartComponent extends Component
{

    
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emit('CartCount');

    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emit('CartCount');

    }

    public function render()
    {
        $title = 'ShopCart';
        return view('livewire.landing/shop-cart-component')->layout('layouts.guest', ['title' => $title]);
    }
}
