@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ elixir('front/css/product.css') }}">
@stop

@section('content')

  @if(Cart::count() == 0)
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
          <h1>Shopping cart</h1>
          <div class="shopping-cart-page">
            <div class="shopping-cart-data clearfix">
              <p>Your shopping cart is empty!</p>
            </div>
          </div>
        </div>
        <!-- END CONTENT -->
      </div>
  @else
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
      <!-- BEGIN CONTENT -->
      <div class="col-md-12 col-sm-12">
        <h1>Shopping cart</h1>
        <div class="goods-page">
          <div class="goods-data clearfix">
            <div class="table-wrapper-responsive">
            <table summary="Shopping cart">
              <tr>
                <th class="goods-page-image">Image</th>
                <th class="goods-page-description">Description</th>
                <th class="goods-page-ref-no">Ref No</th>
                <th class="goods-page-quantity">Quantity</th>
                <th class="goods-page-price">Unit price</th>
                <th class="goods-page-total" colspan="2">Total</th>
              </tr>
            @foreach($cart as $product)
              <tr>
                <td class="goods-page-image">
                  <a href="#"><img src="build/front/img/products/model3.jpg" alt="Berry Lace Dress"></a>
                </td>
                <td class="goods-page-description">
                  <h3><a href="#">Cool green dress with red bell</a></h3>
                  <p><strong>Item 1</strong> - Color: Green; Size: S</p>
                  <em>More info is here</em>
                </td>
                <td class="goods-page-ref-no">
                  javc2133
                </td>
                <td class="goods-page-quantity">
                  <div class="product-quantity">
                      <input id="product-quantity" type="text" value="{{ $product->qty}}" readonly class="form-control input-sm">
                  </div>
                </td>
                <td class="goods-page-price">
                  <strong><span>$</span>{{ $product->price }}</strong>
                </td>
                <td class="goods-page-total">
                  <strong><span>$</span>{{ $product->subtotal }}</strong>
                </td>
                <td class="del-goods-col">
                  <a class="del-goods" href="#">&nbsp;</a>
                </td>
              </tr>
            @endforeach

            </table>
            </div>

            <div class="shopping-total">
              <ul>
                <li>
                  <em>Sub total</em>
                  <strong class="price"><span>$</span>47.00</strong>
                </li>
                <li>
                  <em>Shipping cost</em>
                  <strong class="price"><span>$</span>3.00</strong>
                </li>
                <li class="shopping-total-price">
                  <em>Total</em>
                  <strong class="price"><span>$</span>50.00</strong>
                </li>
              </ul>
            </div>
          </div>
          <a class="btn btn-default" href="{{ url('/') }}">Continue shopping <i class="fa fa-shopping-cart"></i></a>
          <a class="btn btn-primary" href="">Checkout <i class="fa fa-check"></i></a>
        </div>
      </div>
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->

    <!-- BEGIN SIMILAR PRODUCTS -->
    @include('layout.similar')
    <!-- END SIMILAR PRODUCTS -->
    @endif
@stop

@section('js')
    <script src="{{ elixir('front/js/product.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            Layout.initImageZoom();
            Layout.initTouchspin();
            Layout.initUniform();
        });
    </script>
@stop
