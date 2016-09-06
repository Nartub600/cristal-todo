@extends('base')

@section('content')

    <div class="col-md-offset-4 col-md-4">

        <h3>Tarea: {{ $task->name }}</h3>

        <h3><span data-task-id="{{ $task->id }}" class="status-label label {{ $task->done ? 'label-success' : 'label-danger' }}">{{ $task->done ? 'Hecha' : 'Pendiente' }}</span></h3>

        <p>{{ $task->desc }}</p>

        @if (!$task->done)
        <form data-task-id="{{ $task->id }}" class="done-form inline" action="{{ url('task', $task->id) . '/done' }}" method="post">
            <input type="hidden" name="_method" value="patch">
            <button class="btn btn-default" type="submit">
                <span class="glyphicon glyphicon-ok"></span>
            </button>
        </form>
        @endif
        <a class="btn btn-default" href="{{ url('task/index') }}">Volver</a>

    </div>

@endsection
