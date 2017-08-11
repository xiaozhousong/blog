@extends('layouts.manage')

@section('content')

<div class="" role="main">


<div class="row">
  <div class="col-md-12"><h2>Manage Roles</h2></div>
</div>

<div class="row">
  <div class="col-md-9"></a></div>
  <div class="col-md-3"><a href="{{ route('role.create') }}" class="btn btn-info btn-lg btn-block add_user_btn">Add an new role</a></div>
</div>

<hr>

    
</div>

<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
		    <th>ID</th>
			<th>Name</th>
			<th>Display Name</th>
			<th>Description</th>
			<th>Create at</th>

			<th>Actions</th>
			
			<th></th>
			<th></th>
		</tr>
	</thead>
	<tbaody>
	@foreach($roles as $role)
		<tr>
			<th>{{$role->id}}</th>
			<td>{{$role->name}}</td>
			<td>{{$role->display_name}}</td>
			<td>{{$role->description}}</td>
			<td>{{$role->created_at->toFormattedDateString()}}</th>
			
			<td>
			<a href="{{ route('role.show', $role->id) }}" class="btn btn-block btn-default">View</a>
			</td>
			<td>
			<a href="{{ route('role.edit', $role->id) }}" class="btn btn-block btn-default">Edit</a>
			</td>
			
			<td>
			
			</td>
		</tr>
	@endforeach

	</tbaody>
</table>

{{ $roles->links() }}


@endsection