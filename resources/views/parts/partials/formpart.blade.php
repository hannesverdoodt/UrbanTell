<div class="card z-depth-1 white">
	<div class="input-field col s8 @if ($errors->has('title')) has-error @endif">
		{!! Form::label('title', 'Title') !!}
		{!! Form::text('title', null, ['class' => 'validate']) !!}
		@if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
	</div>
	
	<div class="input-field col s8 @if ($errors->has('description')) has-error @endif">
		{!! Form::label('description', 'description') !!}
		{!! Form::textarea('description', null, ['class' => 'materialize-textarea ', 'length'=> '250']) !!}
		@if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
	</div>
	
	<div class="form-group col s8  @if ($errors->has('image')) has-error @endif">
		{!! Form::label('image', 'image') !!}
		{!! Form::file('image', null, ['class' => 'form-control']) !!}
	</div>
	<div class="input-field">
		{!! Form::submit($submit_text, ['class' => 'btn blue-grey']) !!}
	</div>	
</div>	