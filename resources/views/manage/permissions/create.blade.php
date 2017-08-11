@extends('layouts.manage')

@section('content')

<div class="container">
<h1>Create a permission</h1>
<hr>
{!! Form::open(['route' => 'permission.store']) !!}


    {{Form::label('name','Name:')}}
    {{Form::text('name', null, array('class' => 'form-control'))}}

    {{Form::label('display_name','Display Name:')}}
    {{Form::text('display_name', null, array('class' => 'form-control'))}}

    {{Form::label('description','Description:')}}
    {{Form::text('description', null, array('class' => 'form-control'))}}

    <br>

    {{Form::submit('Submit',array('class' => 'btn btn-secondary btn-lg btn-block'))}}

{!! Form::close() !!}

</div>





@endsection