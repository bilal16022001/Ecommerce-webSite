<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use App\Models\Category;
use Cart;

class HomeComponent extends Component
{
    public $catrgory;
    
    public function addToCart($productId, $productName, $productPrice)
    {
        Cart::add($productId, $productName,1, $productPrice)->associate("\App\Models\Product");
        $this->emit('CartCount');

       
    }

    public function render()
    {

        $this->catrgory = Category::with("product")->get();
        $title = 'Home';
        return view('livewire.landing.home-component')->layout('layouts.guest', ['title' => $title]);
    }
}
