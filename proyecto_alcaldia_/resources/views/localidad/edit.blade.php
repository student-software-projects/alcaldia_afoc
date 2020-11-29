<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>localidad</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('localidad.update',$localidad->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <label for="name">Editar nombre de el tipo de producto</label>
                    <input name="localidad" id="name" type="text" class="form-control" value="{{ $localidad->localidad}}">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ route('localidad.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>

</body>
</html>
