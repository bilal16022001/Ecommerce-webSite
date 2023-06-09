<div>

    <main class="main">
        <div class="page-header breadcrumb-wrap">
            <div class="container">
                <div class="breadcrumb">
                    <a href="index.html" rel="nofollow"><i class="fi-rs-home mr-5"></i>Home</a>
                    <span></span> Shop
                    <span></span> Cart
                </div>
            </div>
        </div>
        <div class="container mb-80 mt-50">
            <div class="row">
                <div class="col-lg-8 mb-40">
                    <h1 class="heading-2 mb-10">Your Cart</h1>
                    <div class="d-flex justify-content-between">
                        <h6 class="text-body">There are <span class="text-brand">3</span> products in your cart</h6>
                        <h6 class="text-body"><a href="#" class="text-muted"  wire:click.prevent="clearItem"><i class="fi-rs-trash mr-5"></i>Clear Cart</a></h6>
                    </div>
                </div>
                @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
   @endif
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive shopping-summery p-3">

                        @if(Cart::count()>0)
                        <table class="table table-wishlist">
                            <thead>
                                <tr class="main-heading">

                                    <th scope="col" colspan="2">Product</th>
                                    <th scope="col">Unit Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Subtotal</th>
                                    <th scope="col" class="end">Remove</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach(Cart::content() as $item)
                                <tr class="pt-30">

                                    <td class="image product-thumbnail pt-40 d-flex align-items-center gap-4">
                                        @if( $item->model)
                                          <img alt="Nest" src="{{asset('attachments/' . $item->model->imageProduct)}}" />
                                        @else
                                        <img alt="Nest" src="" />
                                        @endif

                                        <a class="product-name mb-10 text-heading" href="shop-product-right.html">{{$item->name}}</a>
                                    </td>
                                    <td class="product-des product-name">


                                    </td>
                                    <td class="price" data-title="Price">
                                        <h4 class="text-body">${{$item->price}}</h4>
                                    </td>
                                    <td class="text-center detail-info" data-title="Stock">
                                        <div class="detail-extralink mr-15">
                                            <div class="detail-qty border radius">
                                                <a href="#" class="qty-down" wire:click.prevent="decreaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-down"></i></a>
                                                <span class="qty-val">{{$item->qty}}</span>
                                                <a href="#" class="qty-up" wire:click.prevent="increaseQuantity('{{$item->rowId}}')"><i class="fi-rs-angle-small-up"></i></a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="price" data-title="Price">
                                        <h4 class="text-brand">${{$item->subtotal}}</h4>
                                    </td>


                                    <td class="action text-center" data-title="Remove"><a href="#" class="text-body" wire:click.prevent="removeditem('{{$item->rowId}}')" ><i class="fi-rs-trash"></i></a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <div class="alert alert-info">
                            No item in cart !!
                        </div>
                        @endif

                    </div>


                </div>
                <div class="col-lg-4">
                    <div class="border p-md-4 cart-totals ml-30">
                        <div class="table-responsive">
                            <table class="table no-border">
                                <tbody>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Subtotal</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">${{Cart::subtotal()}}</h4>
                                        </td>
                                    </tr>

                                    <td class="cart_total_label">
                                        <h6 class="text-muted">Tax</h6>
                                    </td>
                                    <td class="cart_total_amount">
                                        <h4 class="text-brand text-end">${{Cart::tax()}}</h4>
                                    </td>
                                </tr>
                                    <tr>
                                        <td scope="col" colspan="2">
                                            <div class="divider-2 mt-10 mb-10"></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Shipping</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h5 class="text-heading text-end">Free</h4</td> </tr> <tr>
                                    </tr>
                                    <tr>
                                        <td class="cart_total_label">
                                            <h6 class="text-muted">Total</h6>
                                        </td>
                                        <td class="cart_total_amount">
                                            <h4 class="text-brand text-end">${{Cart::total()}}</h4>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <a href="#" class="btn mb-20 w-100"  wire:click.prevent="checklooged()">Proceed To CheckOut<i class="fi-rs-sign-out ml-15"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
