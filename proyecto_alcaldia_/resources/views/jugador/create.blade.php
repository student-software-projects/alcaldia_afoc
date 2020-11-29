<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>Jugador</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('jugador.store')}}" method="post">

                @csrf
                <div class="form-group">
                    <label for="name">Nombres del jugador</label>
                    <input type="text" id="name" class="form-control" name="nombres">
                </div>
                <div class="form-group">
                    <label for="name">Apellidos del jugador</label>
                    <input type="text" id="name" class="form-control" name="apellidos">
                </div>
                <div class="form-group">
                    <label for="numero_camisa">Numero_camisa</label>
                    <input type="text" id="numero_camisa" class="form-control" name="numero_camisa">
                </div>
                <div class="form-group">
                    <label for="logo">Apodo</label>
                    <input type="text" id="apodo" class="form-control" name="apodo">
                </div>
                <div class="form-group">
                    <label for="equipo_id">Equipo</label>
                    <select name="equipo_id" id="equipo_id" class="form-control" required>
                        <option value="">Busca tu equipo</option>
                        @foreach($equipos as $equipo)
                            <option value="{{$equipo->id}}">{{$equipo->nombre_equipo}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <button class="btn btn-primary">Guardar Equipo</button>
                <a href="{{ route('jugador.index') }}"" class="btn btn-danger">Cancelar</a>
            </form>

        </div>
    </div>
</div>
</body>
</html>
