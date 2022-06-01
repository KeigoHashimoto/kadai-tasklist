@extends('layouts.app')

@section('content')

<h1>タスク詳細</h1>

<table class="table">
    <div class="row">
        <div class="col-6">
            <thead>
                <tr>
                    <th>タスク</th>
                    <th>タイムリミット</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$tasks->content}}</td>
                    <td>{{$tasks->date}}</td>
                </tr>
            </tbody>
        </div>
    </div>
    
</table>

    {!! link_to_route('tasks.edit','タスクの編集',['task'=>$tasks->id],['class'=>'btn btn-danger']) !!}


@endsection