<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Productc extends Component
{
    public $products;

    public $delete;

    public function deleteProduct($idp)
    {
        $this->delete=$idp;

    }


    public function confirmDeleteProduct(){

        $product = Product::findOrFail($this->delete);

        $product->delete();
        session()->flash('success', 'Product deleted successfully.');
       return redirect()->route("Products");

  }

    public function render()
    {
        $this->products=Product::all();

        return view('livewire.product');
    }
}
