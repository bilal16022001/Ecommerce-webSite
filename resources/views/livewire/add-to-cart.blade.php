<div>
    <h2>Cart Items:</h2>
    <ul>
        @foreach($cartItems as $item)
            <li>{{ $item->name }} - Quantity: {{ $item->qty }} - Price: ${{ $item->price }}</li>
        @endforeach
    </ul>

</div>
