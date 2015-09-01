@extends('app')

@section('content')
<div class="container">
<div class="search-form">
	{!! Form::open(array('url' => 'search', 'class'=>'form searchform')) !!}
			 {!! Form::text('search', null, array('required','class'=>'form-control', 'placeholder'=>'Search for a friends...')) !!}
			 {!! Form::submit('Search', array('class'=>'btn btn-default')) !!}
			 {!! Form::close() !!}
</div>
<div class="search-friends">
 @if (!isset($search_f))
	<?php dd($search_f); ?>
	@if ($search_f == "null"))
	<p>No results found try again</p>
	@endif
	@elseif (count($search_f) > 0)
    
    @foreach($search_f as $search)

    	<li>
    			<img src="{{ asset('/images/profile')}}/{{ $search->profilepic }}" alt="avatar of {{ $search->firstname }}" class="circle"></img>
    			<p>{{ $search->firstname }} {{ $search->lastname }} </p>
				{!! Form::open(array('class' => 'form-inline', 'route' => array('friend.store', $search->email))) !!}
				<input name="email" type="hidden" id="email" value="{{ $search->email }}">
                {!! Form::submit('Add friend', array('class' => 'btn')) !!}
                {!! Form::close() !!}
    		
    	</li>
 
    @endforeach
 	
 @endif
</div>
		<a href="{{ url('home') }}" alt="go back to dashboard btn">home</a>

</div>
@endsection