<div class="form-horizontal">
	<div class="form-body">
		<div class="form-group">
			<label class="col-md-3 control-label">english Name :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('name', $category->translate('en')->name, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">arabic Name :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('name_ar', $category->translate('ar')->name, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">fa-icon :</label>
			<div class="col-md-6">
				<div class="input-icon right">
					<i class="fa fa-microphone"></i>
					{!! Form::text('fa-icon', null, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>	
		<div class="form-group">
			<label class="col-md-3 control-label">English Description</label>
			<div class="col-md-6">
				{!! Form::textarea('description', $category->translate('en')->description, ['class' => 'form-control']) !!}
			</div>
		</div>
		<div class="form-group">
			<label class="col-md-3 control-label">Arabic Description</label>
			<div class="col-md-6">
				{!! Form::textarea('description_ar', $category->translate('en')->description, ['class' => 'form-control']) !!}
			</div>
		</div>
	</div>
	<div class="form-actions">
		<div class="row">
			<div class="col-md-offset-3 col-md-6">
				<button type="submit" class="btn green">Update</button>
			</div>
		</div>
	</div>
</div>