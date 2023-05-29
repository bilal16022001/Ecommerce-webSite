<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;




class Categoryc extends Component
{
    public $Name;

    public function insertcategory(){

        Category::create([
            "name" => $this->Name,
        ]);

        session()->flash('success', 'Category added successfully.');

         return redirect()->route("category");

    }

    public function render()
    {
        return view('livewire.category');
    }
}
