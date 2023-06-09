<?php

namespace App\Http\Livewire\landing;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
class ShopCartComponent extends Component
{

    public function checklooged(){
        if(Auth::guard('web')->check())
        {
         if(Auth::guard('web')->user()->type =="user"){
            return redirect()->route("Checkout");

         }
        }
        else{
            return redirect()->route("login");
         }
    }
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId, $qty);
        $this->emit('CartCount');

    }
    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId, $qty);
        $this->emit('CartCount');

    }
    public function removeditem($id){
        cart::remove($id);
        session()->flash('success','item has been removed');

    }
    public function clearItem()
    {
        Cart::destroy();
    }

    public function render()
    {
        $title = 'ShopCart';
        return view('livewire.landing/shop-cart-component')->layout('layouts.guest', ['title' => $title]);
    }
}
