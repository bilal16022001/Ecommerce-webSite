<?php

namespace App\Http\Livewire\landing;

// use App\Http\Livewire\Order;
use App\Models\Adresse;
use App\Models\Product;
use App\Models\ProductOrder;
use Livewire\Component;
use App\Models\Order;
use Cart;
class CheckOutComponent extends Component
{
  public $fname;
  public $lname;
  public $address;
  public $country;
  public $city;
  public $zipcode;
  public $phone;
  public $email;
 public $products_id;
    public function order(){
        // Adresse::create([
        //     "user_id" => 1,
        //     "FirstName" => $this->fname,
        //     "LastName" => $this->lname,
        //     "Address" => $this->address,
        //     "country" => $this->country,
        //     "city" => $this->city,
        //     "zipcode" => $this->zipcode,
        //     "phone" => $this->phone,
        //     "email" => $this->email,
        // ]);

    //    Order::create([
            //  "user_id" => auth("web")->user()->id
    //    ]);

       foreach(Cart::Content() as $item){
        $order = Order::findOrFail(auth("web")->user()->id);

        if (!$order->products->contains($item->id)) {
            $order->products()->attach($item->id);
        }
       }


        Cart::destroy();

        // $order->products()->attach();

        session()->flash('success', 'Orders has been Success .');

        return redirect()->route("Shopcart");


    }
    public function render()
    {

        $title = 'CheckOut';
        return view('livewire.landing/check-out-component')->layout('layouts.guest', ['title' => $title]);
    }
}
