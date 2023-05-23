<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class ShopCartComponent extends Component
{
    public function render()
    {
        $title = 'ShopCart';
        return view('livewire.landing/shop-cart-component')->layout('layouts.guest', ['title' => $title]);
    }
}
