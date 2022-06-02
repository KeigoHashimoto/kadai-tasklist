@extends('layouts.app')

@section('content')

<h1>{{$tasks->id}}のタスク編集ページ</h1>

        <div class="row">
            <div class="col-6">
                {!! Form::model($tasks,['route'=>['tasks.update',$tasks->id],'method'=>'put']) !!}
                
                    <div class="form-group">
                        {!! Form::label('content','タスク') !!}
                        {!! Form::text('content',null,['class'=>'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('status','ステータス') !!}
                        {!! Form::text('status',null,['class'=>'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('date','タスク') !!}
                        {!! Form::date('date',null,['class'=>'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
                
                {!! Form::close() !!}
            </div>
        </div>
    
</table>

@endsection