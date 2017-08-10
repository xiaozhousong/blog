@extends('layouts.app')

@section('content')


<div class="container">


<div class="row">


    <div class="col-xs-6 col-md-4">
       <img src = "{{ $post->logo }}" class="img-responsive" alt="Responsive image">
       <br>
       <p>Create at: {{$post->created_at->toFormattedDateString()}}</p>
       <p>By: {{$post->user->name}}</p> 
    </div>
    <div class="col-xs-12 col-md-8">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
    </div>
 
</div>

</div>
    


@endsection