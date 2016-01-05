<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="margin-top:25px;">
			<li class="start ">
				<a href="{{ url('admin') }}">
				<i class="icon-bar-chart"></i>
				<span class="title">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-docs"></i>
				<span class="title">Pages</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="{{ Active::route('admin.page.index') }}">
						<a href="{{ route('admin.page.index') }}">
							<i class="icon-doc"></i>
							<span class="title">Show all pages</span>
						</a>
					</li>
					<li class="{{ Active::route('admin.page.create') }}">
						<a href="{{ route('admin.page.create') }}">
							<i class="icon-note"></i>
							<span class="title">Create page</span>
						</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="javascript:;">
				<i class="icon-list"></i>
				<span class="title">Categories</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="{{ Active::route('admin.category.index') }}">
						<a href="{{ route('admin.category.index') }}">
							<i class="icon-doc"></i>
							<span class="title">Show all Categories</span>
						</a>
					</li>
					<li class="{{ Active::route('admin.category.create') }}">
						<a href="{{ route('admin.category.create') }}">
							<i class="icon-note"></i>
							<span class="title">Create new category</span>
						</a>
					</li>
				</ul>
			</li>			
			<li >
				<a href="javascript:;">
				<i class="icon-layers"></i>
				<span class="title">Products</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li class="{{ Active::route('admin.product.index') }}">
						<a href="{{ route('admin.product.index') }}">
							<i class="icon-doc"></i>
							<span class="title">Show all Product</span>
						</a>
					</li>
					<li class="{{ Active::route('admin.product.create') }}">
						<a href="{{ route('admin.product.create') }}">
							<i class="icon-note"></i>
							<span class="title">Create new Product</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="start ">
				<a href="{{ route('admin.user.index') }}">
				<i class=" icon-users"></i>
				<span class="title">users</span>
				</a>
			</li>
			<li class="start ">
				<a href="{{ url('admin.order.index') }}">
					<i class="icon-basket-loaded"></i>
					<span class="title">orders</span>
				</a>
			</li>
			<li class="heading">
				<h3 class="uppercase">Features</h3>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-lock"></i>
					<span class="title">Admin role</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="extra_lock2.html">All Roles</a>
					</li>
					<li>
						<a href="extra_lock2.html">Add new Admin</a>
					</li>
				</ul>
			</li>
			<li>
				<a href="{{ route('admin.review.index')}}">
					<i class="icon-bubbles"></i>
					<span class="title">All Reviews</span>
				</a>
			</li>
			<li>
				<a href="javascript:;">
					<i class="icon-question"></i>
					<span class="title">FAQ</span>
					<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="extra_lock2.html">All FAQ</a>
					</li>
					<li>
						<a href="extra_lock2.html">Create new FAQ </a>
					</li>
					<li>
						<a href="extra_lock2.html">All FAQ Category</a>
					</li>
					<li>
						<a href="extra_lock2.html">New FAQ Category</a>
					</li>
				</ul>
			</li>
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>
<!-- END SIDEBAR -->