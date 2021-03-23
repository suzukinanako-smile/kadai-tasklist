@extends('layouts.app')

@section('content')

 <h1>id = {{ $task->user_id }} のタスク詳細ページ</h1>
    <table class="table table-board">
        <tr>
            <th>id</th>
            <td>{{ $task->user_id }}</td>
        </tr>
        <tr>
            <th>ステータス</th>
            <td>{{ $task->status }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    
    {!! link_to_route('tasks.edit', 'このタスクを編集', ['task' => $task->user_id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->user_id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection