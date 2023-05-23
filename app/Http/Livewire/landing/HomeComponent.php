<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $title = 'Home';
        return view('livewire.landing/home-component')->layout('layouts.guest', ['title' => $title]);
    }
}
