<div id="explore" class="col s12">
<p>explore</p>	

	<!-- Modal Trigger -->
	<a class="modal-trigger waves-effect waves-light btn" href="#explorem">Create exploration</a>

	<!-- Modal Structure -->
	<div id="explorem" class="modal modal-fixed-footer">
	{!! Form::open(array('url' => 'expedition', 'class'=>'form')) !!}
	    <div class="modal-content">
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
							{!! Form::label('date', 'Date') !!}
							{!! Form::text('date', null, ['class' => 'validate']) !!}
							@if ($errors->has('date')) <p class="help-block">{{ $errors->first('date') }}</p> @endif
			</div>
	     	<div class="input-field @if ($errors->has('description')) has-error @endif">
							{!! Form::label('description', 'Description') !!}
							{!! Form::textarea('description', null, ['class' => 'materialize-textarea ', 'length'=> '500']) !!}
							@if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif
			</div>
	    </div>
	   
	    <div class="modal-footer">
		    <button type="submit" class="waves-effect waves-green btn-flat">Create expedition</button>
		    <a href="#" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
		</div>
	{!! Form::close() !!}
	</div>





</div>