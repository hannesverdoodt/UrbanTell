@extends('app')

@section('content')
<div class="container">
	<div class="row">

		<div class="col s12 m12 ">

    <h5>Create Chapter for Story {{ $storydata->title }}</h5>

    {!! Form::model(new App\Part, ['route' => ['story.part.store', $storydata ],'files' => true , 'class'=>'']) !!}
        @include('parts/partials/formpart', ['submit_text' => 'Create Chapter'])
    {!! Form::close() !!}
    </div>
	</div>
 </div>
@endsection