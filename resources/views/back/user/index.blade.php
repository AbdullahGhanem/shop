@extends('back.master')

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
	All Users
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ route('admin.dashboard') }}">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Users</a>
				<i class="fa fa-angle-right"></i>
			</li>
		</ul>
	</div>

	<div class="table-scrollable table-scrollable-borderless">
		<table class="table table-hover table-light">
			<thead>
				<tr class="uppercase">
					<th colspan="2">name</th>
					<th>username</th>
					<th>email</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td class="fit">
							<img class="user-pic" src="../../assets/admin/layout3/img/avatar4.jpg">
						</td>
						<td><a href="javascript:;" class="primary-link">{{ $user->name }}</a></td>
						<td>{{ $user->username }}</td>
						<td>{{ $user->email }}</td>
						<td>
							<a href="{{ route('admin.user.edit', $user->id)}}" class="btn default btn-xs purple">
							<i class="fa fa-edit"></i> Edit </a>

							<a href="#" class="btn default btn-xs red">
							<i class="fa fa-trash-o"></i> Delete </a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>

@stop