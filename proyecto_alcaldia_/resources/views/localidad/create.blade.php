<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <title>localidad</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <form action="{{route('localidad.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre de la localidad</label>
                    <input type="text" id="name" class="form-control" name="localidad">
                </div>
                <hr>
                <button class="btn btn-primary">Guardar localidad</button>
                <a href="{{ route('localidad.index') }}" class="btn btn-danger">Cancelar</a>
            </form>

        </div>
    </div>
</div>
</body>
</html>
