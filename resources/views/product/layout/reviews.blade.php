<div class="tab-pane fade in active" id="Reviews">
	@if($product->reviews->count() == 0)
		<p>There are no reviews for this product.</p>
	@else
		@foreach($product->reviews as $review)
			<div class="review-item clearfix">
				<div class="review-item-submitted">
				<strong>{{ $review->user->name }}</strong>
				<em>30/12/2013 - 07:37</em>
				<div class="rateit" data-rateit-value="{{ $review->rating }}" data-rateit-ispreset="true" data-rateit-readonly="true"></div>
				</div>                                              
				<div class="review-item-content">
				<p>{{ $review->review }}</p>
				</div>
			</div>
		@endforeach
	@endif
	<!-- BEGIN FORM-->
	<form action="#" class="reviews-form" role="form">
		<h2>Write a review</h2>

		<div class="form-group">
			<label for="review">Review <span class="require">*</span></label>
			<textarea class="form-control" rows="8" id="review"></textarea>
		</div>
		<div class="form-group">
			<label for="email">Rating</label>
			<input type="range" value="4" step="0.25" id="backing5">
			<div class="rateit" data-rateit-backingfld="#backing5" data-rateit-resetable="false"  data-rateit-ispreset="true" data-rateit-min="0" data-rateit-max="5">
			</div>
		</div>
		<div class="padding-top-20">                  
			<button type="submit" class="btn btn-primary">Send</button>
		</div>
	</form>
	<!-- END FORM--> 
</div>