<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use Cart;
class ShopComponent extends Component
{
    
    public function addToCart($productId, $productName, $productPrice)
    {
        Cart::add($productId, $productName,1, $productPrice)->associate("\App\Models\Product");
        $this->emit('CartCount');


    }
    public function render()
    {
        $title = 'Shop';
        return view('livewire.landing/shop-component')->layout('layouts.guest', ['title' => $title]);
    }
}
