@extends('master')

@section('content')
<ul class="breadcrumb">
	<li><a href="index.html">Home</a></li>
	<li><a href="{{ route('orders')}}">orders</a></li>
	<li class="active">create</li>
</ul>
<!-- BEGIN SIDEBAR & CONTENT -->
<div class="row margin-bottom-40">

	@include('layout.slidebar')
	
	<!-- BEGIN CONTENT -->
	<div class="col-md-9 col-sm-9">
		<h1>craete order </h1>
		<div class="content-form-page">
			<div class="row">
				<div class="">
				<form method="POST" action="/order" class="form-horizontal form-without-legend" role="form">
    					{!! csrf_field() !!}
					<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
						<label for="address" class="col-lg-2 control-label">
							Address: <span class="require">*</span>
						</label>
						<div class="col-lg-10">
							<textarea class="form-control" name="address"></textarea>
							@if ($errors->has('name'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('username') }}</strong>
		                        </span>
		                    @endif
						</div>
					</div>
					<div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
						<label for="phone" class="col-lg-2 control-label">
							phone number: <span class="require">*</span>
						</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="phone" id="phone">
							@if ($errors->has('name'))
		                        <span class="help-block">
		                            <strong>{{ $errors->first('username') }}</strong>
		                        </span>
		                    @endif
						</div>
					</div>
					

						<div class="col-lg-10 col-md-offset-2 padding-left-0 padding-top-20">
							<button type="submit" class="btn btn-primary btn-block">deal</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- END CONTENT -->
</div>
@stop