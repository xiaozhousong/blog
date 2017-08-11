@extends('layouts.manage')

@section('content')


<div class="container">

<h1>Edit: {{$role->display_name}}</h1>

{!! Form::model($role, ['route'=>['role.update', $role->id],'method'=>'PUT']) !!}
	
{{Form::label('name','Name:')}}
{{Form::text('name', null, array('class' => 'form-control'))}}

{{Form::label('display_name','Display Name:')}}
{{Form::text('display_name', null, array('class' => 'form-control'))}}

{{Form::label('description','Description:')}}
{{Form::text('description', null, array('class' => 'form-control'))}}

<!-- not working here, I am try to selected the options these are already in the datebase -->
<!-- <input type="hidden" v-for="permissionsSelected" name="permissions"> -->
<!-- not working here -->

<hr>
<h3>Permissions:</h3>

  @foreach($permissions as $permission)
 
   
   <label for="permissionBtn{{$permission->id}}">
   <input id="permissionBtn{{$permission->id}}" type="checkbox" name="permission[]" value="{{$permission->id}}">
   {{$permission->display_name}} - ({{$permission->description}})
   </label>
   <br>

  @endforeach

{{ Form::submit('Submit',array('class' => 'btn btn-secondary btn-lg btn-block')) }}

@endsection

<!-- not working here -->
<!-- @section('scripts')
  <script>

  var app = new Vue({
    el: '#app',
    data: {
      permissionsSelected: {!!$role->permissions->pluck('id')!!}
    }
 });

  </script>
@endsection -->
<!-- not working here -->