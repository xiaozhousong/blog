@extends('layouts.manage')

@section('content')

<div class="container">
<h1>Create a role</h1>
<hr>
<form action="{{ route('role.store') }}" method="POST">
    {{ csrf_field() }}

        <div class ="row">
            <div class = "col-md-3 control-label"><label for="name">Name</label></div>
            <div class = "col-md-9"><input class="form-control" type="text" name="name" id="name"></div>
        </div>
     
        <div class ="row">
            <div class = "col-md-3 control-label"><label for="display_name">Display Name</label></div>
            <div class = "col-md-9"><input class="form-control" type="text" name="display_name" id="display_name"></div>
        </div>
        <div class="row">
            <div class = "col-md-3 control-label"><label for="description">Description</label></div>
            <div class = "col-md-9"><input class="form-control" type="text" name="description" id="description"></div>
        </div>

	    <hr>
		<h3>Permissions:</h3>


        
        
        @foreach($permissions as $permission)
        <label for="perBtn{{$permission->id}}">
        <input id="perBtn{{$permission->id}}" type="checkbox" name="permissions[]" value="{{$permission->id}}">
        {{$permission->display_name}} - ({{$permission->description}})
        </label>
        <br>
        @endforeach


        <hr>
        
        <button type="submit" class="btn btn-default btn-lg btn-block">
            Create User
        </button>   
</form>




</div>





@endsection