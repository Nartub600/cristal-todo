@extends('base')

@section('content')

    <div class="col-md-offset-4 col-md-4">

        <h3>Editar tarea</h3>

        <div>
            <form id="new-task-form" action="{{ url('task/update', $task->id) }}" method="post">
                <input type="hidden" name="_method" value="patch">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ $task->name }}" required>
                </div>

                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <textarea type="text" class="form-control" name="desc" placeholder="Descripción" required>{{ $task->desc }}</textarea>
                </div>

                <button type="submit" class="btn btn-default">Guardar</button>
                <a class="btn btn-default" href="{{ url('task/index') }}">Cancelar</a>
            </form>
        </div>

    </div>

@endsection
