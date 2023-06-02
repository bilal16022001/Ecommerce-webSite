<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use Cart;

class ShopCartComponent extends Component
{
    // public $quantity;

    // public function addToCart($productId, $productName, $productPrice)
    // {
    //     Cart::add($productId, $productName, 3, $productPrice)->associate("\App\Models\Product");
    //     session()->flash('susccess', 'item added successfully.');
    //     return redirect()->route("Shopcart");
    // }

    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
    }

    public function render()
    {
        $title = 'ShopCart';
        return view('livewire.landing/shop-cart-component')->layout('layouts.guest', ['title' => $title]);
    }
}
