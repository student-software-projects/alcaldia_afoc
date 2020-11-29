<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jugador</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                @if(session('message'))
                    <div class="alert alert-{{session('type')}}" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    @foreach($jugadores as $jugador)
                        <tr>
                            <th>NOMBRES</th>
                            <td>{{$jugador->nombres}}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{$jugador->apellidos}}</td>
                        </tr>
                        <tr>
                            <th>NUMERO CAMISA</th>
                            <td>{{$jugador->numero_camisa}}</td>
                        </tr>
                        <tr>
                            <th>APODO</th>
                            <td>{{$jugador->apodo}}</td>
                        </tr>
                        <tr>
                            <th>EQUIPO</th>
                            <td>{{$jugador->nombre_equipo}}</td>
                        </tr>
                        <tr>
                            <th>CREACIÓN</th>
                            <td>{{ $jugador->created_at}}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $jugador->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('jugador.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

