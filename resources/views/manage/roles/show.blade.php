@extends('layouts.manage')

@section('content')


<div class="container">

<h1>Display Name: {{$role->display_name}}</h1>
<h3>Name: {{$role->name}}</h3>
<hr>
<H4>Description: {{$role->description}}</h4>
<p>Created at: {{$role->created_at->toFormattedDateString()}}</p>
<p>Updated at: {{$role->updated_at->toFormattedDateString()}}</p>
<hr>
<h3>Permissions</h3>
<ul>
  @foreach($role->permissions as $per)
   <li>{{ $per->display_name }} - ({{ $per->description }})</li>
  @endforeach
</ul>

@endsection