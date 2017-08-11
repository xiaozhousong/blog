@extends('layouts.app')

@section('content')

<div class="container" role="main">


<div class="row">
  <div class="col-md-12"><h2>Manage Posts</h2></div>
</div>

<div class="row">
  <div class="col-md-9"></a></div>
  <div class="col-md-3"><a href="{{ route('managepost.create') }}" class="btn btn-info btn-lg btn-block add_user_btn">Add an post</a></div>
</div>

<hr>

    
</div>

<table class="table table-striped">
	<thead class="thead-inverse">
		<tr>
		    <th>ID</th>
			<th>Title</th>
			<th>Writer</th>
		
			<th>Created at</th>
			<th>Updated at</th>

			<th>Actions</th>
			<th></th>
			<th></th>
			<th></th>
			
			
			<th></th>
		</tr>
	</thead>
	<tbody>
	@foreach($posts as $post)
		<tr>
			<th>{{$post->id}}</th>
			<td>{{$post->title}}</td>
			<td>{{$post->user->name}}</td>
			<td>{{$post->created_at->toFormattedDateString()}}</th>
			<td>{{$post->updated_at->toFormattedDateString()}}</th>
			<td>
			<a href="{{ route('managepost.show', $post->id) }}" class="btn btn-block btn-default">View</a>
			</td>
			@permission('update-post')
			    <td>
				<a href="{{ route('managepost.edit', $post->id) }}" class="btn btn-block btn-default">Edit</a>
				</td>
			@endpermission
			@permission('delete-post')
				<td>
				{!! Form::open(['route' => ['managepost.destroy', $post->id], 'method' => 'DELETE']) !!}
	            {!! Form::submit('Delete', ['class' => 'btn btn-default btn-block']) !!}
	            {!! Form::close() !!}
				</td>
			@endpermission
			
		</tr>
	@endforeach

	</tbody>
	
</table>

{{ $posts->links() }}

@endsection