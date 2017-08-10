@extends('layouts.app')

@section('content')

<div class="container">
<h1>Edit a post</h1>
<hr>
{!! Form::model($post, ['route'=>['managepost.update', $post->id],'method'=>'PUT']) !!}
        
    {{Form::label('logo','Logo:')}}
    {{Form::text('logo', null, array('class' => 'form-control'))}}

    {{Form::label('title','Title:')}}
    {{Form::text('title', null, array('class' => 'form-control'))}}

    {{Form::label('body','Body:')}}
    {{Form::textarea('body', null, array('class' => 'form-control'))}}


    <input class="form-control" name="user_id" type="text" value="{{Auth::user()->id}}" id="user_id">


    <br>

    {{ Form::submit('Submit',array('class' => 'btn btn-secondary btn-lg btn-block')) }}




    
{!! Form::close() !!}




</div>



@endsection