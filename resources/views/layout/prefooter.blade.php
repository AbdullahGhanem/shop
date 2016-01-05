<div class="pre-footer">
	<div class="container">
		<div class="row">
			<!-- BEGIN BOTTOM ABOUT BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>About us</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam sit nonummy nibh euismod tincidunt ut laoreet dolore magna aliquarm erat sit volutpat. Nostrud exerci tation ullamcorper suscipit lobortis nisl aliquip  commodo consequat. </p>
				<p>Duis autem vel eum iriure dolor vulputate velit esse molestie at dolore.</p>
			</div>
			<!-- END BOTTOM ABOUT BLOCK -->

			<!-- BEGIN BOTTOM INFO BLOCK -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>Pages</h2>
				<ul class="list-unstyled">
					<li><i class="fa fa-angle-right"></i> <a href="javascript:;">Delivery Information</a></li>

					@foreach(App\Page::all() as $page)
						<li><i class="fa fa-angle-right"></i> 
							<a href="{{ url('/page', $page->slug) }}">{{ $page->title }}</a>
						</li>
					@endforeach
				</ul>
			</div>
			<!-- END INFO BLOCK -->

			<!-- BEGIN TWITTER BLOCK --> 
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2 class="margin-bottom-0">Latest Tweets</h2>
				<a class="twitter-timeline" href="https://twitter.com/twitterapi" data-tweet-limit="2" data-theme="dark" data-link-color="#57C8EB" data-widget-id="455411516829736961" data-chrome="noheader nofooter noscrollbar noborders transparent">Loading tweets by @keenthemes...</a>      
			</div>
			<!-- END TWITTER BLOCK -->

			<!-- BEGIN BOTTOM CONTACTS -->
			<div class="col-md-3 col-sm-6 pre-footer-col">
				<h2>Our Contacts</h2>
				<address class="margin-bottom-40">
				35, Lorem Lis Street, Park Ave<br>
				California, US<br>
				Phone: 300 323 3456<br>
				Fax: 300 323 1456<br>
				Email: <a href="mailto:info@metronic.com">info@metronic.com</a><br>
				Skype: <a href="skype:metronic">metronic</a>
				</address>
			</div>
			<!-- END BOTTOM CONTACTS -->
		</div>
			<hr>
		<div class="row">
			<!-- BEGIN SOCIAL ICONS -->
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a class="rss" data-original-title="rss" href="javascript:;"></a></li>
					<li><a class="facebook" data-original-title="facebook" href="javascript:;"></a></li>
					<li><a class="twitter" data-original-title="twitter" href="javascript:;"></a></li>
					<li><a class="googleplus" data-original-title="googleplus" href="javascript:;"></a></li>
					<li><a class="linkedin" data-original-title="linkedin" href="javascript:;"></a></li>
					<li><a class="youtube" data-original-title="youtube" href="javascript:;"></a></li>
					<li><a class="vimeo" data-original-title="vimeo" href="javascript:;"></a></li>
					<li><a class="skype" data-original-title="skype" href="javascript:;"></a></li>
				</ul>
			</div>
			<!-- END SOCIAL ICONS -->

			<!-- BEGIN NEWLETTER -->
			<div class="col-md-6 col-sm-6">
				<div class="pre-footer-subscribe-box pull-right">
					<h2>Newsletter</h2>
					<form action="#">
					<div class="input-group">
					<input type="text" placeholder="youremail@mail.com" class="form-control">
					<span class="input-group-btn">
					<button class="btn btn-primary" type="submit">Subscribe</button>
					</span>
					</div>
					</form>
				</div> 
			</div>
			<!-- END NEWLETTER -->
		</div>
	</div>
</div>