<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class CheckOutComponent extends Component
{
    public function render()
    {
        $title ='CheckOut';
        return view('livewire.landing/check-out-component')->layout('layouts.landing',['title'=>$title]);
    }
}
