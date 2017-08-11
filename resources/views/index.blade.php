@extends('layouts.app')

@section('content')

<div class="container">


<div class="row">
@foreach($posts as $post)
	<div class="col-sm-6 col-md-4">

		<div class="thumbnail">
			<img src="{{ $post->logo }}" alt="Responsive image" class="img-responsive">
			<div class="caption">
			<h3>{{$post->title}}</h3>
			<p><a href="{{ route('managepost.show', $post->id) }}" class="btn btn-default" role="button">More Details</a></p>
			</div>
		</div>
	</div>
@endforeach
</div>



</div>




@endsection