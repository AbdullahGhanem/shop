@extends('back.master')

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
	Create Category 
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ route('admin.dashboard') }}">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Categories</a>
				<i class="fa fa-angle-right"></i>
			</li>
		</ul>
	</div>
	<!-- END PAGE HEADER-->
	<table class="table table-striped table-bordered table-advance table-hover">
		<thead>
			<tr>
				<th>
					<i class="fa fa-briefcase"></i> Name
				</th>
				<th class="hidden-xs">
					<i class="fa fa-user"></i> Description
				</th>
				<th>
					<i class="fa fa-shopping-cart"></i> Slug
				</th>
				<th>
					<i class="fa fa-shopping-cart"></i> action
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach($categories as $category)
				<tr>
					<td class="highlight">
						<div class="success">
						</div>
						<a href="{{ route('category.show',$category->slug ) }}">
						{{ $category->name }} </a>
					</td>
					<td class="hidden-xs">
						{{ str_limit($category->description, 50) }}
					</td>
					<td>
						 {{ $category->slug }}
					</td>
					<td>
						<a href="{{ route('admin.category.edit', $category->id) }}" class="btn default btn-xs purple">
						<i class="fa fa-edit"></i> Edit </a>

						<a href="#" class="btn default btn-xs black">
						<i class="fa fa-trash-o"></i> Delete </a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
@stop