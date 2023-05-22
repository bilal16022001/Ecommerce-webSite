<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class AccountComponent extends Component
{
    public function render()
    {
        $title = 'Account';
        return view('livewire.landing/account-component')->layout('layouts.landing',['title'=> $title]);
    }
}
