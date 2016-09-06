@extends('base')

@section('content')

    <div class="col-md-offset-4 col-md-4">

        <h3>TO-DO Webapp</h3>

        <div>
            <form id="login-form" action="{{ url('user/login') }}" method="post">
                <div class="form-group">
                    <label for="name">Usuario</label>
                    <input type="text" class="form-control" name="name" placeholder="Usuario" required>
                </div>

                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                </div>

                <button type="submit" class="btn btn-default">Entrar</button>

            </form>
            &nbsp;
            <p id="login-info" class="bg-danger hidden">No existe un usuario con esos datos</p>
        </div>

    </div>

@endsection
