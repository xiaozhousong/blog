@extends('layouts.manage')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>View user detail</h1>
            <hr>
            <h4>User Name: {{ $user->name }}</h4>
            <h4>User Email: {{ $user->email }}</h4>

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3>User Role</h3>
            <hr>
             @foreach ($user->roles as $role)
            <p>{{ $role->display_name }}</p>
            @endforeach
        </div>
    </div>


    <hr>
    <div class="row">
        <div class = "col-md-6"><a href="{{ route('users.edit', $user->id) }}" class="btn btn-default btn-lg btn-block">Edit</a></div>
        <div class = "col-md-6">
            {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'DELETE']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-default btn-lg btn-block']) !!}
            {!! Form::close() !!}
        </div>
        
    </div>
</div>

@endsection