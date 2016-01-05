<div>
    <div class="product-item">
      <div class="pi-img-wrapper">
        <img src="/build/front/img/products/model4.jpg" class="img-responsive" alt="Berry Lace Dress">
        <div>
          <a href="/build/front/img/products/model4.jpg" class="btn btn-default fancybox-button">Zoom</a>
          <a href="#product-pop-up" class="btn btn-default fancybox-fast-view">View</a>
        </div>
      </div>
      <h3><a href="{{ url('product', $product->slug) }}">{{ $product->title }}</a></h3>
      <div class="pi-price">$29.00</div>
      <a href="{{ route('cart.store')}}" class="addCartButton btn btn-default add2cart" product-id="{{ $product->id }}" >Add to cart</a>
      @if($product->new === 1)
          <div class="sticker sticker-new"></div>
      @endif
      @if($product->sale === 1)
          <div class="sticker sticker-sale"></div>
      @endif
    </div>
</div>