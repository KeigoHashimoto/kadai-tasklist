@extends('layouts.app')

@section('content')
<div class="text-center">
    <h1>Login</h1>
</div>

<div class="row">
    <div class="col-sm-6 offset-sm-3">
        {!!Form::open(['route'=>'login.post'])!!}
            <div class="form-group">
                {!!Form::label('email','Email')!!}
                {!!Form::email('email',null,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!!Form::label('password','Password')!!}
                {!!Form::password('password',null,['class'=>'form-control'])!!}
            </div>
            {!!Form::submit('Log in',['class'=>'btn btn-primary btn-block'])!!}
        {!!Form::close()!!}
    </div>
</div>
{{--ユーザー登録へのリンク--}}

    <p class="mt-2 text-center">new user?{!! link_to_route('signup.get',' Signup now!')!!}</p>

@endsection