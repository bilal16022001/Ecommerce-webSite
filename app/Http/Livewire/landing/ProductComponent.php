<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class ProductComponent extends Component
{
    public function render()
    {
        $title = "product";
        return view('livewire.landing/product-component')->layout('layouts.guest', ['title' => $title]);
    }
}
