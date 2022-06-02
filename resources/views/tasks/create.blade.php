@extends('layouts.app')

@section('content')

<h1 class="mb-3">新規タスク作成ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($tasks,['route'=>'tasks.store']) !!}
            <div class="form-group">
                {!! Form::label('content','タスク' )!!}
                {!! Form::text('content',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('status','ステータス' )!!}
                {!! Form::text('status',null,['class'=>'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::label('date','タイムリミット') !!}
                {!! Form::date('date',null,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('タスクを登録',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@endsection