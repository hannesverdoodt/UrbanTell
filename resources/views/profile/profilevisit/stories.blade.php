<div id="stories" class="col s12">
	<h5>Stories</h5>
	 @if ( $stories->count() )
		<ul>

            @foreach( $stories as $story )
            <div class="card medium">
				        <div class="card-image waves-effect waves-block waves-light">
				          <img class="activator" src="{{ asset('/images/story/') }}/{{ $story->image }}" alt="{{ $story->title}}">
				        </div>
				        <div class="card-content">
				          <span class="card-title activator grey-text text-darken-4">{{ $story->title }} <i class="mdi-navigation-more-vert right"></i></span>
				          <p><a href="{{ route('story.show', $story->id) }}">Read exploration</a></p>
				        </div>				       
			</div>
            @endforeach
        </ul>
        @else
        <p>hasen't make any stories</p>
		@endif
</div>