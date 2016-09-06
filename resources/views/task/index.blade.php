@extends('base')

@section('content')

    <h3>Lista de tareas</h3>

    <table class="table table-hover">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th class="text-center">Estado</th>
                <th class="text-center">Opciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->name }}</td>
                <td>{{ str_limit($task->desc, 40) }}</td>
                <td class="text-center">
                    <h4>
                        <span data-task-id="{{ $task->id }}" class="status-label label {{ $task->done ? 'label-success' : 'label-danger' }}">{{ $task->done ? 'Hecha' : 'Pendiente' }}</span>
                    </h4>
                </td>
                <td class="text-center">
                    <a class="btn btn-default" href="{{ url('task', $task->id) }}">
                        <span class="glyphicon glyphicon-search"></span>
                    </a>
                    @if (!$task->done)
                        <a data-task-id="{{ $task->id }}" class="edit-btn btn btn-default" href="{{ url('task', $task->id) . '/edit' }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <form data-task-id="{{ $task->id }}" class="done-form inline" action="{{ url('task', $task->id) . '/done' }}" method="post">
                            <input type="hidden" name="_method" value="patch">
                            <button class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-ok"></span>
                            </button>
                        </form>
                    @endif
                    <form class="inline" action="{{ url('task', $task->id) }}" method="post">
                        <input type="hidden" name="_method" value="delete">
                        <button class="btn btn-default" type="submit">
                            <span class="glyphicon glyphicon-remove"></span>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>

    </table>

    <a class="btn btn-default" href="{{ url('user/logout') }}">Salir</a>
    <a class="btn btn-primary pull-right" href="{{ url('task/create') }}">Nueva tarea</a>

@endsection
