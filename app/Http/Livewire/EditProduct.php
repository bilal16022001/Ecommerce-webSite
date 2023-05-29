<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Livewire\WithFileUploads;


class EditProduct extends Component
{

    use WithFileUploads;
    public $SubCategory;
    public $Categoreis;
    public $name;
    public $description;
    public $pro_id;
    public $price;
    public $category_id;
    public $SubCat_id;
    public $imageProduct;

    public function mount($id)
    {
        $product = Product::find($id);
        $this->pro_id= $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->Category_id;
        $this->SubCat_id = $product->SubCat_id;
        $this->imageProduct = $product->imageProduct;
    }


     public function UpdateProduct(){

         $product = Product::findOrFail($this->pro_id);

            $product->name = $this->name;
            $product->description = $this->description;
            $product->price = $this->price;
            $product->category_id = $this->category_id;
            $product->SubCat_id = $this->SubCat_id;

            if ($this->imageProduct) {

                $path = $this->imageProduct->store('images', 'Images');
            }
            $product->imageProduct = $path;

            // Save the changes
            $product->save();
            return redirect()->route("Products");
     }


    public function render()
    {

        $this->Categoreis = Category::all();
        $this->SubCategory = SubCategory::all();

        return view('livewire.edit-product');
    }
}
