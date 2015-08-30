@extends('../app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col s2 m2">
			<p> </p>
		</div>
		<div class="col s8 m8 ">

				<h5>Create a story</h5>

				{!! Form::open(array('url' => 'story/', 'files' => true, 'class'=>'col-md-12')) !!}
				<div class="card z-depth-1 white">
					<div class="input-field col s12 @if ($errors->has('title')) has-error @endif">
					<i class="prefix"></i>
						{!! Form::label('title', 'Title') !!}
						{!! Form::text('title', null, ['class' => 'validate']) !!}
						@if ($errors->has('title')) <p class="help-block">{{ $errors->first('title') }}</p> @endif
					</div>
					<div class="input-field col s12 @if ($errors->has('title')) has-error @endif">
					<i class="prefix"></i>
						{!! Form::label('subtitle', 'Subtitle') !!}
						{!! Form::text('subtitle', null, ['class' => 'validate']) !!}
						@if ($errors->has('subtitle')) <p class="help-block">{{ $errors->first('subtitle') }}</p> @endif
					</div>

					<div class="input-field col s12 @if ($errors->has('location')) has-error @endif">
					<i class="mdi-maps-place prefix"></i>
						{!! Form::label('location', 'location') !!}
						{!! Form::text('location', null, ['class' => 'validate']) !!}
						@if ($errors->has('location')) <p class="help-block">{{ $errors->first('location') }}</p> @endif
					</div>

					<div class="input-field col s12 @if ($errors->has('description')) has-error @endif">
					<i class="mdi-editor-mode-edit prefix"></i>
						{!! Form::label('description', 'description') !!}
						{!! Form::textarea('description', null, ['class' => 'materialize-textarea', 'length'=> '500']) !!}
						@if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
					</div>
					
					
					<div class="form-group @if ($errors->has('image')) has-error @endif">
						{!! Form::label('image', 'image') !!}
						{!! Form::file('image', null, ['class' => 'form-control']) !!}
					</div>
					<div class="input-field col s12">
						{!! Form::submit('Create Story', ['class' => 'btn blue-grey']) !!}
					</div>	
				</div>												
				{!! Form::close() !!}
				
		</div>
				<div class="col s2 m2">
					<p></p>
				</div>
	</div>
</div>
@endsection