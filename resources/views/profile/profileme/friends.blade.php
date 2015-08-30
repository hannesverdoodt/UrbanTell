	    <div id="friends" class="col s12">
	    <h5>Friends</h5>
		@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


	     @if  ( $invitefriends->count())
				<ul class="collection">
				@foreach ($invitefriends as $invitefriend)
			    				<li class="collection-item avatar"><a href="{{ url('/profile') }}/{{ $invitefriend->id }}">
			     					<i class="mdi-file-folder circle"></i>
			     					<span class="title">{{ $invitefriend->name}}</span>
			      					<p>{{$invitefriend->email}}<br></p></a>
			    				</li>	
    						
								{!! link_to_action('FriendController@getRemoveFriend', 'Decline', array('id' => $invitefriend->id)) !!}
								{!! link_to_action('FriendController@getAddFriend', 'Accept', array('id' => $invitefriend->id)) !!}
						        
				@endforeach
				</ul>
			@endif

			 @if ( $friends->count() )
				
				<ul class="collection">
				@foreach ($friends as $friend)
			    				<li class="collection-item avatar"><a href="{{ url('/profile') }}/{{ $friend->id }}">
			     					<i class="mdi-file-folder circle"></i>
			     					<span class="title">{{ $friend->name}}</span>
			      					<p>{{$friend->email}}<br></p></a>
			    				</li>	
    						
				@endforeach
				</ul>
			@else
				<p> U dont have any friends, invite some</p>
			@endif
		

<!-- Modal Trigger -->
  <a class="modal-trigger waves-effect waves-light btn" href="#modal1">Add a friend</a>

  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer">
  {!! Form::open(array('url' => 'friend', 'class'=>'form')) !!}
    <div class="modal-content">
     	<div class="input-field @if ($errors->has('email')) has-error @endif">
						{!! Form::label('email', 'email') !!}
						{!! Form::text('email', null, ['class' => 'validate']) !!}
						@if ($errors->has('email')) <p class="help-block">{{ $errors->first('email') }}</p> @endif
		</div>
    </div>
    <div class="modal-footer">
    <button type="submit" class="waves-effect waves-green btn-flat">Add friend</button>
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cancel</a>
    </div>
  {!! Form::close() !!}
  </div>												
</div>