@extends('layouts.manage')

@section('content')


<div class="container">


<table class="table table-striped">
  <thead class="thead-inverse">
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Display Name</th>
      <th>Description</th> 
      <th>Created at</th>
      <th>Updated at</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th>{{$permission->id}}</th>
      <td>{{$permission->name}}</td>
      <td>{{$permission->display_name}}</td>
      <td>{{$permission->description}}</td>
      <td>{{$permission->created_at->toFormattedDateString()}}</th>
      <td>{{$permission->updated_at->toFormattedDateString()}}</th>
      
    </tr>

  </tbaody>
  
</table>

</div>
    


@endsection