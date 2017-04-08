@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ elixir('front/css/home.css') }}">
@stop

@section('slideshow')
   @include('layout.slideshow')
@stop

@section('content')
        <!-- BEGIN SALE PRODUCT & NEW ARRIVALS -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SALE PRODUCT -->
          <div class="col-md-12 sale-product">
            <h2>New Arrivals</h2>
            <div class="owl-carousel owl-carousel5">
              @foreach($products as $product)
                @include('layout.product')
              @endforeach
            </div>
          </div>
          <!-- END SALE PRODUCT -->
        </div>
        <!-- END SALE PRODUCT & NEW ARRIVALS -->

        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
        
          <!-- BEGIN categories -->
          @include('layout.categories')
          <!-- END categories -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <h2><a href="{{route('category.show', $category1->slug)}}">{{ $category1->name }}</a></h2>
            <div class="owl-carousel owl-carousel3">
                @foreach($category1->products as $product1)
                    @include('layout.product')
                @endforeach
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN TWO PRODUCTS & PROMO -->
        <div class="row margin-bottom-35 ">
          <!-- BEGIN TWO PRODUCTS -->
          <div class="col-md-12 five-items-bottom-items">
            <h2><a href="{{route('category.show', $category2->slug)}}">{{ $category2->name }}</a></h2>
            <div class="owl-carousel owl-carousel5">
                @foreach($category2->products as $product1)
                    @include('layout.product')
                @endforeach
            </div>
          </div>
          <!-- END TWO PRODUCTS -->
        </div>        
        <!-- END TWO PRODUCTS & PROMO -->
@stop

@section('js')
    <script src="{{ elixir('front/js/home.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            LayersliderInit.initLayerSlider();
            Layout.initImageZoom();
            Layout.initTouchspin();
            
            Layout.initFixHeaderWithPreHeader();
            Layout.initNavScrolling();
        });
    </script>
@stop
