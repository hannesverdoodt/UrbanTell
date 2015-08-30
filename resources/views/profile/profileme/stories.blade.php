	 <div class="row">
	 	<div class="col s1">
	 		<p> </p>
	 	</div>
		<div id="stories" class="col s10">
		    @if ( $stories->count() )

		            @foreach( $stories as $story )
		            <div class="card medium">
				        <div class="card-image waves-effect waves-block waves-light">
				          <img class="activator" src="{{ asset('/images/story/') }}/{{ $story->image }}" alt="{{ $story->title}}">
				        </div>
				        <div class="card-content">
				          <span class="card-title activator grey-text text-darken-4">{{ $story->title }} <i class="mdi-navigation-more-vert right"></i></span>
				          <p><a href="{{ route('story.show', $story->id) }}">Read exploration</a></p>
                                          <p><a href="{{ route('story.edit', $story->id,'edit') }}">Edit exploration</a></p>

                                        </div>
				        <div class="card-reveal">
				          <span class="card-title grey-text text-darken-4">Card Title <i class="mdi-navigation-close right"></i></span>
				          <p>{{ $story->description }}</p>
				        </div>
					</div>
		            @endforeach
			@else
				<p> U dont have any stories, create some now. Click on round button </p>
			@endif

			<div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
    			
    			<a class="btn-floating btn-large light-blue" href="{{ route('story.create') }}">
			      <i class="large mdi-editor-mode-edit"></i>
			    </a>
                            

			</div>
		</div>
		<div class="col s1">
	 		<p> </p>
	 	</div></div>