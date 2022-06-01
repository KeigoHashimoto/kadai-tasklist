@extends('layouts.app')

@section('content')

<h1>{{$tasks->id}}のタスク編集ページ</h1>

        <div class="row">
            <div class="col-6">
                {!! Form::model($tasks,['route'=>['tasks.update',$tasks->id],'method'=>'put']) !!}
                
                    <div class="form-group">
                        {!! Form::text('content',null,['class'=>'form-control']) !!}
                        {!! Form::date('date',null,['class'=>'form-control']) !!}
                    </div>
                    
                    {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
                
                {!! Form::close() !!}
            </div>
        </div>
    
</table>

@endsection