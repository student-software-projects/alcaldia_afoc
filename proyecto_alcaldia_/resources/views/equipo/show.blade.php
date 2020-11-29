<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>equipo</title>
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
                    @foreach($equipos as $equipo)
                        <tr>
                            <th>NOMBRE DEL EQUIPO</th>
                            <td>{{$equipo->nombre_equipo}}</td>
                        </tr>
                        <tr>
                            <th>LOGO</th>
                            <td>{{$equipo->logo}}</td>
                        </tr>
                        <tr>
                            <th>LOCALIDAD</th>
                            <td>{{ $equipo->localidad}}</td>
                        </tr>
                        <tr>
                            <th>CREACIÓN</th>
                            <td>{{ $equipo->created_at}}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $equipo->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('equipo.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
</body>
</html>

