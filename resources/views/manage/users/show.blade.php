@extends('layouts.manage')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>View user detail</h1>
            <h3>{{ $user->name }}</h3>
            <h3>{{ $user->email }}</h3>

            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">Edit</a>
            
        </div>
    </div>
</div>

@endsection