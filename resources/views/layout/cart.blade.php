<div class="top-cart-block">
	<div class="top-cart-info">
		<a href="javascript:void(0);" class="top-cart-info-count">{{ Cart::count() }} items</a>
	@if(Cart::total() != 0)
		<a href="javascript:void(0);" class="top-cart-info-value">${{ Cart::total() }}</a>
	@endif
	</div>
	<i class="fa fa-shopping-cart"></i>

	<div class="top-cart-content-wrapper">
		<div class="top-cart-content">
			<ul class="scroller" style="height: 250px;">
			@foreach(Cart::content() as $row)
				<li>
					<a href="shop-item.html"><img src="/build/front/img/cart-img.jpg" alt="Rolex Classic Watch" width="37" height="34"></a>
					<span class="cart-content-count">x {{ $row->qty}}</span>
					<strong><a href="{{ route('product.show', App\Product::find($row->id)->slug )}}">{{ $row->name }}</a></strong>
					<em>${{ $row->subtotal }}</em>
					<a href="javascript:void(0);" class="del-goods">&nbsp;</a>
				</li>
			@endforeach
			</ul>
			<div class="text-right">
				<a href="{{ route('cart.index') }}" class="btn btn-default">View Cart</a>
				<a href="shop-checkout.html" class="btn btn-primary">Checkout</a>
			</div>
		</div>
	</div>            
</div>          