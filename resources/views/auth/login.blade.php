@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Log in</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!} （ログイン時に使用します。）
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'Password') !!}　（半角英数で6文字以上）
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('Log in', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p class="mt-2">New user? {!! link_to_route('signup.get', 'Sign up now!') !!}</p>
        </div>
    </div>
@endsection