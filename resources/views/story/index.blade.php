<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Grix: title story</title>
</head>
<body>
@if ( !$stories->count() )
        <p>You have no stories</p>
    @else

            @foreach( $stories as $story )
        <div class="card">
                <div class="card-image waves-effect waves-block waves-light">
                  <img class="activator" src="{{ asset('/images/story/') }}/{{ $story->image }}" alt="{{ $story->title}}">
                </div>
                <div class="card-content">
                  <span class="card-title activator grey-text text-darken-4">{{ $story->title }} <i class="mdi-navigation-more-vert right"></i></span>
                  <p><a href="{{ route('story.show', $story->id) }}">Read exploration</a></p>
                </div>
                <div class="card-reveal">
                  <span class="card-title grey-text text-darken-4">{{ $story->title }}<i class="mdi-navigation-close right"></i></span>
                  <p>{{ $story->description }}</p>
                </div>
        </div>
            @endforeach
    @endif

</body>
</html>