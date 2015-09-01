
@extends('app')

@section('content')
<div class="container">
{!! Form::open(array('url' => 'expedition', 'class'=>'form')) !!}
	    <div>
	    	<div class="input-field @if ($errors->has('title')) has-error @endif">
							{!! Form::label('title', 'Title') !!}
							{!! Form::text('title', null, ['class' => 'validate']) !!}
							@if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
			</div>
	    	<div class="input-field @if ($errors->has('location')) has-error @endif">
							{!! Form::label('location', 'Location') !!}
							{!! Form::text('location', null, ['class' => 'validate']) !!}
							@if ($errors->has('location')) <p class="help-block">{{ $errors->first('location') }}</p> @endif
			</div>
	    	<div class="input-field @if ($errors->has('date')) has-error @endif">
							<input id="date" name="date" type="text" placeholder="Choose a date">
							<input type="hidden" name="date" id="date_hidden" value="2015-10-25 00:00:00">
							@if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
			</div>
	     	<div class="input-field @if ($errors->has('description')) has-error @endif">
							{!! Form::label('description', 'Description') !!}
							{!! Form::textarea('description', null, ['class' => 'materialize-textarea ', 'length'=> '500']) !!}
							@if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
			</div>
	    </div>
	   
	    <div>
		    <button type="submit" class="waves-effect waves-green btn-flat">Create expedition</button>
		    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
		</div>
	{!! Form::close() !!}
</div>
@endsection
