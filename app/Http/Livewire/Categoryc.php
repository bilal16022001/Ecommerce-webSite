<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use Livewire\WithPagination;



class Categoryc extends Component
{
    use WithPagination;
    public $Name;
    public $categories;
    public $category_id;
    public $category;
    public $editName;
    public $delete;
    public $perPage = 10;

    public function insertcategory()
    {

        $this->validate([
            'Name' => 'required|unique:categories,name',

        ]);

        Category::create([
            "name" => $this->Name,
        ]);

        session()->flash('success', 'Category added successfully.');

        return redirect()->route("category");
    }

    public function updated($fields){

        $this->validateOnly($fields,
        [

            'Name' => 'required|unique:categories,name',

        ]);


    }

    public function getId($id)
    {
        $this->category_id = $id;
        $cat = Category::FindOrFail($id);
        $this->Name = $cat->name;
    }
    public function UpdateCategory()
    {
        $this->validate([
            'Name' => 'required|unique:categories,name',

        ]);

        $category = Category::findOrFail($this->category_id);
        $category->Name = $this->Name;
        $category->save();

        session()->flash('success', 'Category updated successfully.');
        return redirect()->route("category");
    }


    public function deleteCategory($idp)
    {
        $this->delete = $idp;
    }

    public function confirmDeleteCategory()
    {

        Category::destroy($this->delete);
        session()->flash('susccess', 'Category deleted successfully.');
        return redirect()->route("category");
    }

    public function render()
    {
        $this->categories = Category::all();

        return view('livewire.category');
    }
}
