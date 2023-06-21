<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use App\Models\ProductOrder;

class AccountComponent extends Component
{
    public $MyProducts;

    public function render()
    {
        $this->MyProducts=ProductOrder::all();

        $title = 'Account';
        return view('livewire.landing/account-component')->layout('layouts.guest', ['title' => $title]);
    }
}
