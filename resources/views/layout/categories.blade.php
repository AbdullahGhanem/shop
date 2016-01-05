<div class="sidebar col-md-3 col-sm-4">
	<ul class="list-group margin-bottom-25 sidebar-menu">
		@foreach(App\Category::all() as $category)
			<li class="list-group-item clearfix">
				<a href="{{ route('category.show', $category->slug )}}">
					<i class="fa fa-angle-right"></i> {{ $category->name }}
				</a>
			</li>
		@endforeach
		<li class="list-group-item clearfix dropdown">
			<a href="shop-product-list.html">
				<i class="fa fa-angle-right"></i>
				Mens
			</a>
			<ul class="dropdown-menu">
				<li class="list-group-item dropdown clearfix">
				<a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Shoes </a>
				<ul class="dropdown-menu">
				<li class="list-group-item dropdown clearfix">
				<a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic </a>
				<ul class="dropdown-menu">
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 1</a></li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Classic 2</a></li>
				</ul>
				</li>
				<li class="list-group-item dropdown clearfix">
				<a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport  </a>
				<ul class="dropdown-menu">
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 1</a></li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Sport 2</a></li>
				</ul>
				</li>
				</ul>
				</li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Trainers</a></li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Jeans</a></li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Chinos</a></li>
				<li><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> T-Shirts</a></li>
			</ul>
		</li>
	</ul>
</div>