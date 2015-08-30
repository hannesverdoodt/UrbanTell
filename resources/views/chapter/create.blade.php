@extends('app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col s12 m12 ">

    <h5>Create Chapter for Story </h5>
 @if(isset($story))
 
             {!! Form::model(new App\Chapter, ['route' => ['chapter.store', $story],'files' => true , 'class'=>'']) !!}
                      {!! Form::label('title', 'Title') !!}
            {!! Form::text('title') !!}
            
            {!! Form::label('subtitle','Subtitle')!!}
            {!! Form::text('subtitle') !!}
            
            {!! Form::label('description','Description')!!}
            {!! Form::text('description')!!}
            
            {!! Form::label('type','Type')!!}
            {!! Form::text('type') !!}
           
            
    
            {!! Form::submit('Save Chapter', ['class' => 'btnclass'])!!}
            {!! Form::close()!!}
    
            
                @else 
                     Error

                 @endif
  
    </div>
	</div>
 </div>
@endsection