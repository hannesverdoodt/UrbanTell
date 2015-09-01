<div id="explore" class="col s12">
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
		<!-- Expedition requests -->
		@if ($invexploration->count())
		<div>
			<h6>Expedition requests</h6>
			@foreach ($invexploration as $invexp)
			<li>
				<a href="{{ url('expedition/' . $invexp->id) }}">			
					<div>
						<p>{{  $invexp->date }}</p>
					</div>
					<div>
						<p>{{ $invexp->title }}</p>
						<p>{{ $invexp->location }}</p>
						<div>
							{!! link_to_action('ExpeditionController@getRemoveInv', 'Decline', array('id' => $invexp->id)) !!}
							{!! link_to_action('ExpeditionController@getAcceptInv', 'Accept', array('id' => $invexp->id)) !!}
						</div>
					</div>
				</a>	
			</li>
			@endforeach
		</div>
		@endif
		<!-- Expeditions -->
		<div class="block-profile">
			<h6>Expeditions</h6>
			@if ($explore->count())
			
			@foreach ($explore as $exp)
				<li>
				<a href="{{ url('expedition/' . $exp->id) }}">			
					<div>
						<p>{{  $exp->date }}</p>
					</div>
					<div>
						<p>{{ $exp->title }}</p>
						<p>{{ $exp->location }}</p>
						<a href="{{ url('expedition/' . $exp->id) }}"><i></i></a>
					</div>
				</a>	
				</li>


			@endforeach
			@endif
			<a class="btn-large light-blue" href="{{ route('expedition.create') }}">create expedition</a>
		</div>
		<!-- Explored -->
		@if ($explored->count())
		<div class="block-profile">
			<h6>Explored</h6>
			@foreach ($explored as $exp)
				<li>
					<a href="{{ url('expedition/' . $exp->id) }}">			
						<div>
							<p>{{  $exp->date }}</p>
						</div>
						<div>
							<p>{{ $exp->title }}</p>
							<p>{{ $exp->location }}</p>
						</div>
					</a>	
				</li>
			@endforeach
		</div>
		@endif


</div>