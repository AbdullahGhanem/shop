@extends('master')

@section('css')
    <link rel="stylesheet" href="{{ elixir('front/css/product.css') }}">
@stop

@section('content')
        <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a></li>  
            @foreach($product->categories as $category)
              <li><a href="{{ route('category.show', $category->slug) }}">{{ $category->name }}</a></li>
            @endforeach
            <li class="active">{{ $product->name}}</li>
        </ul>
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          @include('layout.categories')
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="product-page">
              <div class="row">
                <div class="col-md-6 col-sm-6">
                  <div class="product-main-image">
                    <img src="{{ url('/img/products', $product->img) }}" alt="Cool green dress with red bell" class="img-responsive" data-BigImgsrc="{{ url('/img/products', $product->img) }}">
                  </div>
                  {{-- gallary --}}
{{--                   <div class="product-other-images">
                    <a href="/build/front/img/products/model3.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/build/front/img/products/model3.jpg"></a>
                    <a href="/build/front/img/products/model4.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/build/front/img/products/model4.jpg"></a>
                    <a href="/build/front/img/products/model5.jpg" class="fancybox-button" rel="photos-lib"><img alt="Berry Lace Dress" src="/build/front/img/products/model5.jpg"></a>
                  </div> --}}
                </div>
                <div class="col-md-6 col-sm-6">
                  <h1>{{ $product->title }}</h1>
                  <div class="price-availability-block clearfix">
                    <div class="price">
                      <strong><span>$</span>{{ $product->price }}</strong>
                      <em>$<span>62.00</span></em>
                    </div>
                    <div class="availability">
                      Availability: <strong>@if($product->amount > 0 )In Stock @else finshed @endif</strong>
                    </div>
                  </div>
                  <div class="description">
                    <p>{{ $product->description }}</p>
                  </div>
{{--                   <div class="product-page-options">
                    <div class="pull-left">
                      <label class="control-label">Size:</label>
                      <select class="form-control input-sm">
                        <option>L</option>
                        <option>M</option>
                        <option>XL</option>
                      </select>
                    </div>
                    <div class="pull-left">
                      <label class="control-label">Color:</label>
                      <select class="form-control input-sm">
                        <option>Red</option>
                        <option>Blue</option>
                        <option>Black</option>
                      </select>
                    </div>
                  </div> --}}
                  <div class="product-page-cart">
                    <div class="product-quantity">
                        <input id="product-quantity" type="text" value="1" readonly class="form-control input-sm">
                    </div>
                    <button class="btn btn-primary" type="submit">Add to cart</button>
                  </div>
                  <div class="review">
                    <input type="range" value="4" step="0.25" id="backing4">
                    <div class="rateit" data-rateit-backingfld="#backing4" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
                    </div>
                    <a href="#">{{$product->reviews->count()}} reviews</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#">Write a review</a>
                  </div>
                  <ul class="social-icons">
                    <li><a class="facebook" data-original-title="facebook" href="#"></a></li>
                    <li><a class="twitter" data-original-title="twitter" href="#"></a></li>
                    <li><a class="googleplus" data-original-title="googleplus" href="#"></a></li>
                    <li><a class="evernote" data-original-title="evernote" href="#"></a></li>
                    <li><a class="tumblr" data-original-title="tumblr" href="#"></a></li>
                  </ul>
                </div>

                <div class="product-page-content">
                  <ul id="myTab" class="nav nav-tabs">
                    <li><a href="#Description" data-toggle="tab">Description</a></li>
                    <li class="active"><a href="#Reviews" data-toggle="tab">Reviews ({{$product->reviews->count()}})</a></li>
                  </ul>
                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade" id="Description">
                      <p>{{ $product->description }}</p>
                    </div>
                    @include('product.layout.reviews')
                  </div>
                </div>

                  @if($product->new === 1)
                      <div class="sticker sticker-new"></div>
                  @endif
                  @if($product->sale === 1)
                      <div class="sticker sticker-sale"></div>
                  @endif
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->

        <!-- BEGIN SIMILAR PRODUCTS -->
        @include('layout.similar')
        <!-- END SIMILAR PRODUCTS -->
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
