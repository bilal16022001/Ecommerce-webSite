<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;

class SubCategoryC extends Component
{
    public $Categories;
    public $Category_id;
    public $name;
    public $subCategry;
    public $subCategory_id;
    public $delete;

    public function updated($fields)
    {

        $this->validateOnly(
            $fields,
            [

                'name' => 'required|unique:sub_categories,name',
                'Category_id' => 'required',
            ]
        );
    }

    public function insertSubCategory()
    {
        $this->validate([
            'name' => 'required',
            'Category_id' => 'required|numeric',
        ]);

        SubCategory::create([
            'name' => $this->name,
            'Category_id' => $this->Category_id
        ]);

        session()->flash('success', 'Sub Category added successfully.');

        return redirect()->route("SubCategory");
    }
    public function getSubCategory($id)
    {
        $this->subCategory_id = $id;
        $Sub_cat = SubCategory::FindOrFail($id);
        $this->name = $Sub_cat->name;
        $this->Category_id = $Sub_cat->Category_id;
    }
    public function UpdateSubCategory()
    {
        $Sub_category = SubCategory::FindOrFail($this->subCategory_id);
        $Sub_category->name = $this->name;
        $Sub_category->Category_id = $this->Category_id;
        $Sub_category->save();
        session()->flash('success', 'Sub Category updated successfully.');
        return redirect()->route("SubCategory");
    }
    public function deleteSubCategory($idp)
    {
        $this->delete = $idp;
    }

    public function confirmDeleteSubCategory()
    {

        SubCategory::destroy($this->delete);
        session()->flash('susccess', 'Sub Category deleted successfully.');
        return redirect()->route("SubCategory");
    }
    public function render()
    {
        $this->Categories = Category::all();
        $this->subCategry =  SubCategory::with("SubCategory")->get();
        return view('livewire.subcategory');
    }
}
