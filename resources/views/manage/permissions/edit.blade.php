@extends('layouts.manage')

@section('content')

<div class="container">
<h1>Edit a permission</h1>
<hr>
{!! Form::model($permission, ['route'=>['permission.update', $permission->id],'method'=>'PUT']) !!}
        
    {{Form::label('name','Name:')}}
    {{Form::text('name', null, array('class' => 'form-control'))}}

    {{Form::label('display_name','Display Name:')}}
    {{Form::text('display_name', null, array('class' => 'form-control'))}}

    {{Form::label('description','Description:')}}
    {{Form::text('description', null, array('class' => 'form-control'))}}


    <br>

    

    {{ Form::submit('Submit',array('class' => 'btn btn-secondary btn-lg btn-block')) }}




    
{!! Form::close() !!}




</div>





@endsection