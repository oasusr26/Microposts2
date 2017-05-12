@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>Log in</h1>
    </div>
    
    <div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {!! Form::open(['route' => 'login.post']) !!}
            
            <div class="form-group">
            {!! Form::label('email', 'メールアドレス') !!}
            {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::label('password', 'パスワード') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
            {!! Form::submit('Log in', ['class' => 'btn btn-primary']) !!}
            </div>
            
            {!! Form::close() !!}
 

    <p>New User?{!! link_to_route('signup.get', 'sign up Now!') !!}</p>
            </div>
    </div> 
    </div>


@endsection