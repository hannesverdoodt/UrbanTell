@extends('app')

@section('content')

@if ($isthisme == "yes")
<div class="container">
	<div class="row">
	    <div class="col s6">
	      <ul class="tabs">
	        <li class="tab col s3"><a class="active blue-grey-text" href="#stories">Stories</a></li>
	        <li class="tab col s3"><a class="blue-grey-text" href="#friends">friends</a></li>
	        <li class="tab col s3"><a class="blue-grey-text" href="#explore">expeditions</a></li>
	        <li class="tab col s3"><a class="blue-grey-text" href="#message">chat</a></li>
	      </ul>
	    </div>
	 </div>
			
		@include('profile/profileme/stories')
		@include('profile/profileme/friends')
		@include('profile/profileme/explore')
		@include('profile/profileme/chat')
		
</div>


@elseif ($isthisme == "no")  

		@include('profile/profilevisit/header')

<div class="container">

	<div class="row">
	    <div class="col s12">
	      <ul class="tabs">
	        <li class="tab col s3"><a class="active blue-grey-text" href="#stories">Stories</a></li>
	        <li class="tab col s3"><a class="blue-grey-text" href="#friends">friends</a></li>
	        <li class="tab col s3"><a class="blue-grey-text" href="#explore">expeditions</a></li>
	      </ul>
	    </div>
	 </div>
	
	@include('profile/profilevisit/stories')
	@include('profile/profilevisit/friends')
	@include('profile/profilevisit/explore')

</div>

@endif

@endsection
