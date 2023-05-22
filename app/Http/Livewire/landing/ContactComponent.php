<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;

class ContactComponent extends Component
{
    public function render()
    {
        $title = 'Contact' ;
        return view('livewire.landing/contact-component')->layout('layouts.landing',['title'=>$title ]);

    }
}
