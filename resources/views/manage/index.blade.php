@extends('layouts.app')

@section('content')

<div class="container" role="main">


<div class="row">
  <div class="col-md-12"><h2>Manage Users</h2></div>
</div>

<div class="row">
  <div class="col-md-9"></a></div>
  <div class="col-md-3"><a href="{{ route('users.create') }}" class="btn btn-info btn-lg btn-block add_user_btn">Add an user</a></div>
</div>

<hr>

    
</div>

<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
		    <th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Created at</th>

			<th>Actions</th>
			
			<th></th>
			<th></th>
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
			<a href="{{ route('users.show', $user->id) }}" class="btn btn-block btn-default">View</a>
			</td>
			<td>
			<a href="{{ route('users.edit', $user->id) }}" class="btn btn-block btn-default">Edit</a>
			</td>
			
			<td>
			{!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-default btn-block']) !!}
            {!! Form::close() !!}
			</td>
		</tr>
	@endforeach

	</tbaody>
</table>

{{ $users->links() }}


@endsection