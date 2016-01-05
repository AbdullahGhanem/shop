@extends('back.master')

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
	All Reviews
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ route('admin.dashboard') }}">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Reviews</a>
				<i class="fa fa-angle-right"></i>
			</li>
		</ul>
	</div>

	<div class="general-item-list">
		@foreach($reviews as $review)
			<div class="item">
				<div class="item-head">
					<div class="item-details">
						<img class="item-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
						<a href="" class="item-name primary-link">{{ $review->user->name}}</a>
						<span class="item-label">3 hrs ago</span>
					</div>
					<span class="item-status ">
						<span class="fa fa-star font-yellow-gold"></span> {{ $review->rating}}
					</span>
				</div>
				<div class="item-body">
					{{ $review->review }}
				</div>
			</div>
		@endforeach
	</div>
@stop