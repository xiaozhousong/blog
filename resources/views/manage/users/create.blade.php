@extends('layouts.manage')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            
                <h1>Create a new user</h1>
                <br>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <h3>Select roles</h3>
                        <div class="form-group">
                            @foreach($roles as $role)

                            <label for="roleBtn{{$role->id}}" class="col-md-4"></label>

                            <div class="col-md-6">
                                <input class="" id="roleBtn{{$role->id}}" type="checkbox" name="roles[]" value="{{$role->id}}">
                               {{$role->name}}
                            
                            </div>
                            @endforeach
                        </div>

                       
                
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default btn-lg btn-block">
                                    Create User
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        
    </div>
</div>





@endsection