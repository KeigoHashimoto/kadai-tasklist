@extends('layouts.app')

@section('content')
    @if(Auth::check())
    
        <h1>こんにちは、{{Auth::user()->name}}さん</h1>
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
            <h1>Welcome to the TaskList</h1>
            {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    @endif
@endsection
