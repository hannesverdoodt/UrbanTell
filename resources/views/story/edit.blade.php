@extends('../app')

@section('content')
<div class="container">
	<div class="story center">
            
          
            @if(isset($story))
           	{!! Form::model($story, array('route' => array('story.update', $story->id), 'method' => 'PUT')) !!}
        
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title',Input::old('title')) !!}
            
            {!! Form::label('location', 'Location') !!}
            {!! Form::text('location', Input::old('location')) !!}
        
            {!! Form::label('subtitle', 'Subtitle') !!}
            {!! Form::text('subtitle', Input::old('subtitle')) !!}
            
            {!! Form::label('description', 'Description') !!}
            {!! Form::text('description', Input::old('description')) !!}
            
            {!! Form::label('image', 'Image') !!}
            {!! Form::file('image', Input::old('Image')) !!}
           
            
    
            {!! Form::submit('Save Story', ['class' => 'btnclass'])!!}
            {!! Form::close()!!}
                @else 
                     Error

                 @endif
        
		
</div>
@endsection
