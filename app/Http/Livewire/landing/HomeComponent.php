<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use App\Models\Category;

class HomeComponent extends Component
{
    public $catrgory;

    public function render()
    {
        $this->catrgory = Category::with("product")->get();
        $title = 'Home';
        return view('livewire.landing/home-component')->layout('layouts.guest', ['title' => $title]);
    }
}
