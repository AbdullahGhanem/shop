<div class="pre-header">
    <div class="container">
        <div class="row">
            <!-- BEGIN TOP BAR LEFT PART -->
            <div class="col-md-6 col-sm-6 additional-shop-info">
                <ul class="list-unstyled list-inline">
                    <li><i class="fa fa-phone"></i><span>+1 456 6717</span></li>
                    <!-- BEGIN CURRENCIES -->
                    <li class="shop-currencies">
                        <a href="javascript:void(0);">£</a>
                        <a href="javascript:void(0);" class="current">$</a>
                    </li>
                    <!-- END CURRENCIES -->
                    @if(App::getLocale() == 'en')
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">English </a>
                            <div class="langs-block-others-wrapper">
                                <div class="langs-block-others">
                                    {!! Form::open(['route' => 'ChangeLang']) !!}
                                        <input name="lang" type="hidden" value="ar">
                                        <button type="submit" class="btn btn-xs default">Arabic</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </li>
                        <!-- END LANGS -->
                    @elseif(App::getLocale() == 'ar')
                        <!-- BEGIN LANGS -->
                        <li class="langs-block">
                            <a href="javascript:void(0);" class="current">Arabic </a>
                            <div class="langs-block-others-wrapper">
                                <div class="langs-block-others">
                                    {!! Form::open(['route' => 'ChangeLang']) !!}
                                        <input name="lang" type="hidden" value="en">
                                        <button type="submit" class="btn btn-xs default">English</button>
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </li>
                        <!-- END LANGS -->
                    @endif
                </ul>
            </div>
            <!-- END TOP BAR LEFT PART -->
            <!-- BEGIN TOP BAR MENU -->
            <div class="col-md-6 col-sm-6 additional-nav">
                <ul class="list-unstyled list-inline pull-right">
                @if(Auth::check())
                    <li><a href="{{ url(Auth::user()->username) }}">{{ Auth::user()->name }}</a></li>
                    <li><a href="{{ url('/wishlist') }}">My Wishlist</a></li>
                    <li><a href="{{ route('cart.index') }}">Checkout</a></li>
                @else
                    <li><a href="{{ route('cart.index') }}">Checkout</a></li>
                    <li><a href="/login">Log In</a></li>
                    <li><a href="/register">Register</a></li>
                @endif
                </ul>
            </div>
            <!-- END TOP BAR MENU -->
        </div>
    </div>        
</div>