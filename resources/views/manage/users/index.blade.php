@extends('layouts.manage')

@section('content')

<div class="container" role="main">
@role('superadministrator') 
    <a href="{{ route('users.create') }}" class="btn btn-default">Add an user</a>
@endrole
    <div class="row">
		<div class="col-xs-8 col-sm-9">
			<h2>Manage Users</h2>
		</div>
	</div>
</div>

<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
		    <th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created at</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbaody>
	@foreach($users as $user)
		<tr>
			<th>{{$user->id}}</th>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>{{$user->created_at->toFormattedDateString()}}</th>
			<td>
			<a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">Edit</a>
			<!-- @permission('superadministrator')
			    <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default">Delete</a>
			@endpermission -->
			@role('superadministrator') 
			    <a href="{{ route('users.destroy', $user->id) }}" class="btn btn-default">Delete</a>
			@endrole
			
			
			</td>
			

		</tr>
	@endforeach

	</tbaody>
</table>

{{ $users->links() }}


@endsection