<div class="form-horizontal">
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">Title :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
	
		<div class="form-group">
			<label class="col-md-3 control-label">body</label>
			<div class="col-md-6">
				{!! Form::textarea('body', null, ['class' => 'form-control']) !!}
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