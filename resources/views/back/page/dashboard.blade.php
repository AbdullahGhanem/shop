@extends('back.master')

@section('content')
	<!-- BEGIN PAGE HEADER-->
	<h3 class="page-title">
	Dashboard
	</h3>
	<div class="page-bar">
		<ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="{{ url('/admin') }}">Dashboard</a>
				<i class="fa fa-angle-right"></i>
			</li>
		</ul>
	</div>
	<!-- END PAGE HEADER-->

<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue-madison">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">
					 1349
				</div>
				<div class="desc">
					 New Feedbacks
				</div>
			</div>
			<a class="more" href="javascript:;">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat red-intense">
			<div class="visual">
				<i class="fa fa-bar-chart-o"></i>
			</div>
			<div class="details">
				<div class="number">
					 12,5M$
				</div>
				<div class="desc">
					 Total Profit
				</div>
			</div>
			<a class="more" href="javascript:;">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green-haze">
			<div class="visual">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="details">
				<div class="number">
					 549
				</div>
				<div class="desc">
					 New Orders
				</div>
			</div>
			<a class="more" href="javascript:;">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat purple-plum">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number">
					 +89%
				</div>
				<div class="desc">
					 Brand Popularity
				</div>
			</div>
			<a class="more" href="javascript:;">
			View more <i class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 col-sm-6">
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-share font-blue-steel"></i>
					<span class="caption-subject font-blue-steel ">Recent Activities</span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="scroller" style="height: 300px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible="0" data-initialized="1">
					<ul class="feeds">
						<li>
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-info">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">
											 You have 4 pending tasks. <span class="label label-sm label-warning ">
											Take action <i class="fa fa-share"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">
									 Just now
								</div>
							</div>
						</li>
						<li>
							<a href="javascript:;">
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-success">
											<i class="fa fa-bar-chart-o"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">
											 Finance Report for year 2013 has been released.
										</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">
									 20 mins
								</div>
							</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="slimScrollBar" style="width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 194.384px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div>
				</div>
				<div class="scroller-footer">
					<div class="btn-arrow-link pull-right">
						<a href="javascript:;">See All Records</a>
						<i class="icon-arrow-right"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-6 col-sm-6">
		<!-- BEGIN PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-bubble font-red-sunglo"></i>
					<span class="caption-subject font-red-sunglo ">Chats</span>
				</div>
				<div class="actions">
					<div class="portlet-input input-inline">
						<div class="input-icon right">
							<i class="icon-magnifier"></i>
							<input type="text" class="form-control input-circle" placeholder="search...">
						</div>
					</div>
				</div>
			</div>
			<div class="portlet-body" id="chats">
				<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 341px;"><div class="scroller" style="height: 341px; overflow: hidden; width: auto;" data-always-visible="1" data-rail-visible1="1" data-initialized="1">
					<ul class="chats">
						<li class="in">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar1.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Bob Nilson </a>
								<span class="datetime">
								at 20:09 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar2.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Lisa Wong </a>
								<span class="datetime">
								at 20:11 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar1.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Bob Nilson </a>
								<span class="datetime">
								at 20:30 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Richard Doe </a>
								<span class="datetime">
								at 20:33 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Richard Doe </a>
								<span class="datetime">
								at 20:35 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar1.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Bob Nilson </a>
								<span class="datetime">
								at 20:40 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="in">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar3.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Richard Doe </a>
								<span class="datetime">
								at 20:40 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </span>
							</div>
						</li>
						<li class="out">
							<img class="avatar" alt="" src="../../assets/admin/layout/img/avatar1.jpg">
							<div class="message">
								<span class="arrow">
								</span>
								<a href="javascript:;" class="name">
								Bob Nilson </a>
								<span class="datetime">
								at 20:54 </span>
								<span class="body">
								Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. sed diam nonummy nibh euismod tincidunt ut laoreet. </span>
							</div>
						</li>
					</ul>
				</div><div class="slimScrollBar" style="width: 7px; position: absolute; top: 165px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 175.917px; background: rgb(187, 187, 187);"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.2; z-index: 90; right: 1px; background: rgb(234, 234, 234);"></div></div>
				<div class="chat-form">
					<div class="input-cont">
						<input class="form-control" type="text" placeholder="Type a message here...">
					</div>
					<div class="btn-cont">
						<span class="arrow">
						</span>
						<a href="" class="btn blue icn-only">
						<i class="fa fa-check icon-white"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- END PORTLET-->
	</div>	
</div>
@stop