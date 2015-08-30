<div class="card z-depth-1 white">
	<div class="input-field col s12 @if ($errors->has('name')) has-error @endif">
	<i class="prefix"></i>
		{!! Form::label('name', 'Name') !!}
		{!! Form::text('name', null, ['class' => 'validate']) !!}
		@if ($errors->has('name')) <p class="help-block">{{ $errors->first('name') }}</p> @endif
	</div>
	
	<div class="input-field col s12 @if ($errors->has('email')) has-error @endif">
	<i class="mdi-editor-mode-edit prefix"></i>
		{!! Form::label('email', 'email') !!}
		{!! Form::email('email', null, ['class' => 'materialize-textarea ', 'length'=> '250']) !!}
		@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
	</div>	
	<div class="input-field col s12">
		{!! Form::submit($submit_text, ['class' => 'btn blue-grey']) !!}
	</div>	
</div>