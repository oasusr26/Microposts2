@extends('layouts.app')

@section('content')

    <div class="text-center">
        <h1>Sign Up</h1>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                
                {!! Form::open(['route' => 'signup.post'], ['class' => 'form-horizontal']) !!}
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('email', 'メールアドレス') !!}
                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('password_confirmation', 'パスワード再入力') !!}
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                    </div>
                    <div class="form-group">        
                    {!! Form::submit('サインアップ', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection