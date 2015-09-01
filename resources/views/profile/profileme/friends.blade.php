
	    <div id="friends">		
	    <div id="profilecard">
			<div class="profile-pic">
				<img src="{{ asset('/images/profile/') }}/{{ Auth::user()->profilepic }}" alt="avatar from {{ Auth::user()->firstname}}">
			</div>
			<div class="profile name">
				<h6>{{ Auth::user()->firstname}} {{ Auth::user()->lastname}}</h6>
				<p>{{ Auth::user()->profilepic}}</p>			
			</div>
			<div class="profile-level">
				<div class="star">
					<i class="fa fa-star"></i>
				</div>
				<div class="level">
					<p>Artisan Explorer</p>
					<p>Progress next level: 50%<p>
				</div>
			</div>
		</div>
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
			     					<img src="{{ asset('/images/profile')}}/{{ $invitefriend->profilepic }}" alt="avatar from {{ $invitefriend->firstname }} " class="circle">
			     					<span class="title">{{ $invitefriend->firstname }} {{ $invitefriend->lastname}}</span>
			      					<p>{{$invitefriend->email}}<br></p></a>
			    				</li>	
    							
								{!! link_to_action('FriendController@getRemoveFriend', 'Decline', array('id' => $invitefriend->id)) !!}
								{!! link_to_action('FriendController@getAddFriend', 'Accept', array('id' => $invitefriend->id)) !!}
						        
				@endforeach
				</ul>
			@endif
			 
			 {!! Form::open(array('url' => 'search', 'class'=>'form searchform')) !!}
			 {!! Form::text('search', null, array('required','class'=>'form-control', 'placeholder'=>'Search for a friends...')) !!}
			 {!! Form::submit('Search', array('class'=>'btn btn-default')) !!}
			 {!! Form::close() !!}

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
		@if ($friendsStory->count())
			
			<h5 class="title-block">Friends stories</h5>
				
			@foreach ($friendsStory as $friendstory)
				<p>{{ $friendstory->title }}</p>
			@endforeach	
		@endif												
</div>