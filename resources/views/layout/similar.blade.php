<div class="row margin-bottom-40">
  <div class="col-md-12 col-sm-12">
    <h2>Most popular products</h2>
    <div class="owl-carousel owl-carousel4">
        @foreach(App\Product::all() as $product)
            @include('layout.product')
        @endforeach
    </div>
  </div>
</div>