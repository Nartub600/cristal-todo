@extends('base')

@section('content')

    <div class="col-md-offset-4 col-md-4">

        <h3>Nueva tarea</h3>

        <div>
            <form action="{{ url('task/store') }}" method="post">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" name="name" placeholder="Nombre" required>
                </div>

                <div class="form-group">
                    <label for="desc">Descripción</label>
                    <textarea type="text" class="form-control" name="desc" placeholder="Descripción" required></textarea>
                </div>

                <button type="submit" class="btn btn-default">Guardar</button>
                <a class="btn btn-default" href="{{ url('task/index') }}">Cancelar</a>
            </form>
        </div>

    </div>

@endsection
