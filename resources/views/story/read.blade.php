@extends('../app')

@section('content')
<div class="container">
	<div class="story center">
		<h3 class="storytitle center">{{ $story->title }}</h3> 
		<h4 class="storyauthor center"><a href="{{ url('/profile') }}/{{ $author->id }}"> author: {{ $author->name }}</a></h4>
			<div class="center">
				<img class="materialboxed center" width="450" src="{{ asset('/images/story/') }}/{{ $story->image }}" 
				alt="header image {{ $story->title}}">
			</div>
		<p>{{ $story->description }}</p>

	<div class="chapter">
	@if ( !$parts->count() )
        <p>This is where the story ends...</p>
    @else
        <ul class="parts">
            @foreach( $parts as $part )
                <li class="center">
				<img class="materialboxed" width="450" src="{{ asset('/images/parts/') }}/{{ $part->image }}" alt="{{ $story->title}}">
				<div class="chapterpart">
						<h1>{{ $part->title }}</h1>
				</div>	
                </li>
            @endforeach
        </ul>
     </div>

    @endif

    @if ($isthisme == 'yes')
    <div class="fixed-action-btn" style="bottom: 45px; right: 24px;">
   		 <a class="btn-floating btn-large light-blue" href="{!! url('story/' . $story->id . '/part/create') !!}">
      			<i class="large mdi-editor-mode-edit"></i>
    </a>
	</div>
    <div class="center">
		<p>{!! link_to_route('story.chapter.create', 'Create Chapter', $story->id) !!}</p>
   </div>
    @else
	
	@endif
	
				
</div>
@endsection
