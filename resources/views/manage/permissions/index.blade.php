@extends('layouts.manage')

@section('content')

<div class="" role="main">


<div class="row">
  <div class="col-md-12"><h2>Manage Permissions</h2></div>
</div>

<div class="row">
  <div class="col-md-9"></a></div>
  <div class="col-md-3"><a href="{{ route('permission.create') }}" class="btn btn-info btn-lg btn-block add_user_btn">Add an permission</a></div>
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
	@foreach($permissions as $permission)
		<tr>
			<th>{{$permission->id}}</th>
			<td>{{$permission->name}}</td>
			<td>{{$permission->display_name}}</td>
			<td>{{$permission->description}}</td>
			<td>{{$permission->created_at->toFormattedDateString()}}</th>
			
			<td>
			<a href="{{ route('permission.show', $permission->id) }}" class="btn btn-block btn-default">View</a>
			</td>
			<td>
			<a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-block btn-default">Edit</a>
			</td>
			
			<td>
			
			</td>
		</tr>
	@endforeach

	</tbaody>
</table>

{{ $permissions->links() }}


@endsection