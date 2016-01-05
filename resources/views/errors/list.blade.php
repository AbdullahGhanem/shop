@if($errors->any())
	@foreach($errors->all() as $error)
		<div class="Metronic-alerts alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
			<i class="fa-lg fa fa-warning"></i>  {{ $error}}
		</div>
	@endforeach
@endif