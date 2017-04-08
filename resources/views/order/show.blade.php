@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ elixir('front/css/product.css') }}">
@stop

@section('content')

  @if(Auth::user()->orders->count() <= 0)
      <div class="row margin-bottom-40">
        <!-- BEGIN CONTENT -->
        <div class="col-md-12 col-sm-12">
          <h1>Your Orders </h1>
          <div class="shopping-cart-page">
            <div class="shopping-cart-data clearfix">
              <p>You Don't Have Any Orders</p>
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
        <h1>Your Orders</h1>
        <div class="goods-page">
          <div class="goods-data clearfix">
            <div class="table-wrapper-responsive">
            <table summary="Shopping cart">
              <tr>
                <th class="goods-page-image">code</th>
                <th class="goods-page-description">Total Price</th>
                <th class="goods-page-quantity">address</th>
                <th class="goods-page-price">phone</th>
              </tr>
            @foreach($orders as $order)

              <tr>
                <td class="goods-page-description">
                  <h3><a href="{{ url('order', $order->id) }}">{{ $order->id }}</a></h3>
                </td>
                <td class="goods-page-price">
                  <strong><span>$</span>{{ $order->total }}</strong>
                </td>
                <td class="goods-page-price">
                  <strong>{{ $order->address }}</strong>
                </td>
                <td class="goods-page-total">
                  <strong>{{ $order->phone }}</strong>
                </td>
              </tr>
            @endforeach

            </table>
            </div>
          </div>
          <a class="btn btn-default" href="{{ url('/') }}">Continue shopping <i class="fa fa-shopping-cart"></i></a>
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
