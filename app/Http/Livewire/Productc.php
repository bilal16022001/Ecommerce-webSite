<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;

class Productc extends Component
{
    public $products;

    public function DeleteProduct($id){
        $product = Product::findOrFail($id);
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
