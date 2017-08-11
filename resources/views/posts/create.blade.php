@extends('layouts.app')

@section('content')

<div class="container">
<h1>Create a new post</h1>
<hr>
{!! Form::open(['route' => 'managepost.store']) !!}


    {{Form::label('title','Title:')}}
    {{Form::text('title', null, array('class' => 'form-control'))}}

    {{Form::label('body','Body:')}}
    {{Form::textarea('body', null, array('class' => 'form-control'))}}

    {{Form::label('logo','Logo:')}}
    {{Form::text('logo', null, array('class' => 'form-control'))}}

    <!--  <input type = "" name = "id" value = "{{Auth::user()->id}}"> -->

    <input class="form-control hide" name="user_id" type="text" value="{{Auth::user()->id}}" id="user_id">

    <br>

    {{Form::submit('Submit',array('class' => 'btn btn-default btn-lg btn-block'))}}

{!! Form::close() !!}

</div>



@endsection