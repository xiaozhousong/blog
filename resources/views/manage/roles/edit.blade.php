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

<h3>Edited Permissions</h3>
    <div class="form-group">



  @foreach($permissions as $permission)
 
   
   <label for="permissionBtn{{$permission->id}}">
   <input id="permissionBtn{{$permission->id}}" type="checkbox" name="permissions[]" value="{{$permission->id}}">
   {{$permission->display_name}} - ({{$permission->description}})
   </label>
   <br>

  @endforeach
  </div>

  <hr>

<div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                    Update User
                                </button>

                            </div>
                        </div>

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