<div id="friends" class="col s12">
	<h5>friends</h5>
	@if ( $friends->count() )
				
				<ul class="collection">
				@foreach ($friends as $friend)
			    				<li class="collection-item avatar">
			     					<i class="mdi-file-folder circle"></i>
			     					<span class="title">{{ $friend->name}}</span>
			      					<p>{{$friend->email}}<br></p>
			    				</li>	
    						
				@endforeach
				</ul>
			@else
				<p> has no friends at the moment, inviter him/her to friends</p>
			@endif
</div>