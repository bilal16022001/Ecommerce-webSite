<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;

class CartComponenet extends Component
{
    public $cart;
    protected $listeners = ['CartCount' => 'updateCartCount'];

    public function mount()
    {
        $this->cart = Cart::count();
    }
    
   
    public function updateCartCount()
    {
        $this->cart = Cart::count();
    }

    public function render()
    {
        return view('livewire.cart-componenet');
    }
}
