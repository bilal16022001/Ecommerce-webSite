<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class ShopComponent extends Component
{
    public function render()
    {
        $title = 'Shop';
        return view('livewire.landing/shop-component')->layout('layouts.landing',['title'=>$title ]);   
    }
}
