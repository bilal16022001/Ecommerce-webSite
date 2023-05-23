<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class AboutComponent extends Component
{
    public function render()
    {
        $title = 'About';
        return view('livewire.landing/about-component')->layout("layouts.guest", ['title' => $title]);
    }
}
