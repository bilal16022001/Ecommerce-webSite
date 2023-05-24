<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use Livewire\WithFileUploads;
use App\Models\Product;
use Illuminate\Support\Str;

class AddProduct extends Component
{
    use WithFileUploads;
    public $name;
    public $Description;
    public $Price;
    public $imageProduct;
    public $Categoreis;
    public $SubCategory;
    public $Category_id;
    public $SubCategory_id;


    public function render()
    {
        $this->Categoreis = Category::all();
        $this->SubCategory = SubCategory::all();

        return view('livewire.add-product');
    }

    public function insertProduct()
    {


        // $path = $this->imageProduct->store('images', "public");

        if ($this->imageProduct) {

            $path = $this->imageProduct->store('images', 'Images');
        }

        Product::create([

            "name" => $this->name,
            "description" => $this->Description,
            "price" => $this->Price,
            "imageProduct" => $path,
            "Category_id" => $this->Category_id,
            "SubCat_id" => $this->SubCategory_id,
        ]);

        return redirect()->route("Products");
    }
}