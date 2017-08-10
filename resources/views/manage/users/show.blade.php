@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>View user detail</h1>
            <h3>{{ $user->name }}</h3>
            <h3>{{ $user->email }}</h3>

            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-default">Edit</a>

            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}

            
        </div>
    </div>
</div>

@endsection