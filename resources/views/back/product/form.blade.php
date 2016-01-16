<div class="form-horizontal">
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Title (E) :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">Title (A) :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('title_ar', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Price :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('price', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">Amount :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('amount', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">image :</label>
			<div class="col-md-6">
					{!! Form::file('img', ['id' => 'input-1']) !!}

			</div>
		</div>	
		<div class="form-group">
			<div class="col-md-4"></div>
			<div class="col-md-3">
				<div class="md-checkbox">
					{!! Form::checkbox('sale', 1, null,  ['class' => 'md-check', 'id' => 'checkbox1']) !!}
					<label for="checkbox1">
					<span class="inc"></span>
					<span class="check"></span>
					<span class="box"></span>
					Sale </label>
				</div>
			</div>
			<div class="col-md-3">
				<div class="md-checkbox">
					{!! Form::checkbox('new', 1, null,  ['class' => 'md-check', 'id' => 'checkbox2']) !!}
					<label for="checkbox2">
					<span class="inc"></span>
					<span class="check"></span>
					<span class="box"></span>
					new </label>
				</div>
			</div>
		</div>		
		<div class="form-group">
			<label class="col-md-3 control-label">Description (E) :</label>
			<div class="col-md-6">
				{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Description (A) :</label>
			<div class="col-md-6">
				{!! Form::textarea('description_ar', null, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
	<div class="form-actions">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<button type="submit" class="btn green">{{ $submiteText }}</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#input-1").fileinput({'showUpload':false, 'previewFileType':'any'});

</script>