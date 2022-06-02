@extends('layouts.app')

@section('content')
<div class="pb-5">
    <table class="table table-striped table-bordered">
        <h1>タスク一覧</h1>
        
        <thead>
            <tr class="text-center">
                <th>view</th>
                <th>check</th>
                <th>task</th>
                <th>status</th>
                <th>limit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr class="text-center">
                    <td>{!! link_to_route('tasks.show','more',['task'=>$task->id]) !!}</td>
                    {!! Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete'])!!}
                        <td>{!! Form::submit('完了',['class'=>'btn btn-danger'])!!}</td>
                    {!! Form::close() !!}
                    <td class="text-left">{{$task->content}}</td>
                    <td>{{ $task->status }}</td>
                    <td>{{ $task->date }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! link_to_route('tasks.create','タスクを作成',[],['class'=>'btn btn-primary']) !!}
</div>
@endsection