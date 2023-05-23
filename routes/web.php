<?php

use App\Http\Livewire\landing\AboutComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\landing\HomeComponent;
use App\Http\Livewire\landing\ShopComponent;
use App\Http\livewire\landing\ContactComponent;
use App\Http\livewire\landing\ShopCartComponent;
use App\Http\livewire\landing\CheckOutComponent;
use App\Http\livewire\landing\AccountComponent;
use App\Http\Livewire\Product;
use App\Http\Livewire\Order;
use App\Http\Livewire\AddProduct;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeComponent::class)->name('Home');
Route::get('/Shop', ShopComponent::class)->name('Shop');
Route::get('/Contact', ContactComponent::class)->name('Contact');
Route::get("/About", AboutComponent::class)->name("About");
Route::get("/Shopcart", ShopCartComponent::class)->name("Shopcart");
Route::get("/Checkout", CheckOutComponent::class)->name("Checkout");
Route::get("/Account", AccountComponent::class)->name("Account");
Route::get("/Products", Product::class)->name("Products");
Route::get("/Orders", Order::class)->name("Orders");
Route::get("/AddProducts", AddProduct::class)->name("AddProducts");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
