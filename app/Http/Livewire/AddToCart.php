<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Hardevine\Shoppingcart\Facades\Cart;


class AddToCart extends Component
{

    public $productId;
    public $productName;
    public $productPrice;

    public function addToCart()
    {
        Cart::add('293ad', 'Product 1', 1, 9.99);
    }
    public function render()
    {
        $cartItems = Cart::instance('shopping')->content();
        return view('livewire.add-to-cart',compact('cartItems'));
    }
}
