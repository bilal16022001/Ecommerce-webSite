<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Product;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;


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
    public $OldImage = "asdas.jpg";


    public function mount($id)
    {
        $product = Product::findOrFail($id);
        $this->pro_id = $product->id;
        $this->name = $product->name;
        $this->description = $product->description;
        $this->price = $product->price;
        $this->category_id = $product->Category_id;
        $this->SubCat_id = $product->SubCat_id;
        $this->OldImage = $product->imageProduct;
    }

    public function updated($fields)
    {




        $this->validateOnly(
            $fields,
            [
                'name' => ['required', Rule::unique('products', 'name')->ignore($this->pro_id),],
                'description' => 'required',
                'price' => 'required|numeric',
                'imageProduct' => 'required|image|max:2048',
                'category_id' => 'required',
                'SubCat_id' => 'required',
            ]
        );
    }



    public function UpdateProduct()
    {

        $this->validate([
            'name' => ['required', Rule::unique('products', 'name')->ignore($this->pro_id),],
            'description' => 'required',
            'price' => 'required|numeric',

            'category_id' => 'required',
            'SubCat_id' => 'required',
        ]);
        $product = Product::findOrFail($this->pro_id);

        $product->name = $this->name;
        $product->description = $this->description;
        $product->price = $this->price;
        $product->category_id = $this->category_id;
        $product->SubCat_id = $this->SubCat_id;

        if (!empty($this->imageProduct)) {
            $product->imageProduct  = $this->imageProduct->store('images', 'Images');
        } else {
            $product->imageProduct = $this->OldImage;
        }


        // Save the changes
        $product->save();
        session()->flash('success', 'Product has been added .');

        return redirect()->route("Products");
    }


    public function render()
    {

        $this->Categoreis = Category::all();
        $this->SubCategory = SubCategory::all();

        return view('livewire.edit-product');
    }
}
