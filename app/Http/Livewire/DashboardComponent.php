<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        $title = "page dashboard";
        return view('livewire.dashboard-component');
    }
}
