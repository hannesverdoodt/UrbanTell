@extends('app')

@section('content')
<div class="container">
@if ($expedition->count())
	<div id="profilecard">
		<div class="profile-pic">
			<img src="{{ asset('/images/profile/') }}/{{ $creatorinfo->profilepic }}" alt="avatar from {{ $creatorinfo->firstname }}">
		</div>
		<div class="profile name">
			<h6>{{ $expedition->title }}</h6>
			<p>{{ $expedition->location }}</p>			
		</div>
		<div class="profile-level">
			<p>
				{{ $expedition->description }}
			</p>
		</div>
	</div>

@endif		
<!-- invited -->
@if ($friendque->count())
	<div>
		<h6>Invited friends</h6>

		
			@foreach ($friendque as $friend)
				<li>
					<a href="{{ url('/profile') }}/{{ $friend->id }}">
						<img src="{{ asset('/images/profile/') }}/{{ $friend->profilepic }}" alt="avatar from {{ $friend->firstname }} {{ $friend->lastname }}" class="circle">
						<p>{{ $friend->firstname }} {{ $friend->lastname }}</p>
						<p>{{ $friend->email }}</p>	
					</a>
				</li>
			@endforeach

	</div>
@endif
<!-- Ready for exploring -->
@if ($friendsinv->count())	
	<div>
		<h6>Ready for exploring</h6>
				@foreach ($friendsinv as $friend)
				<li>
					<a href="{{ url('/profile') }}/{{ $friend->id }}">
						<img src="{{ asset('/images/profile/') }}/{{ $friend->profilepic }}" alt="avatar from {{ $friend->firstname }} {{ $friend->lastname }}" class="circle">
						<p>{{ $friend->firstname }} {{ $friend->lastname }}</p>
						<p>{{ $friend->email }}</p>	
					</a>
				</li>
			@endforeach

	</div>
@endif	
<!--friendlist -->
@if ($friendlist->count())	
	<div>
		<h6>Invite friends</h6>
		
		
			@foreach ($friendlist as $friend)
				<li>
					<a href="{{ url('/profile') }}/{{ $friend->id }}">
						<img src="{{ asset('/images/profile/') }}/{{ $friend->profilepic }}" alt="avatar from {{ $friend->firstname }} {{ $friend->lastname }}" class="circle">
						<p>{{ $friend->firstname }} {{ $friend->lastname }}</p>
						<p>{{ $friend->email }}</p>	
					</a>
				</li>
				<a href="{{ url('expedition/' .$thisExpedition. '/friend/' .$friend->id )}}">invite friend</a>
			@endforeach	
		</div>
	</div>
@endif
@endsection