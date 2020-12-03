@extends('layouts.admin.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach($equipos as $equipo)
                <form action="{{route('equipo.update',$equipo->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label for="name">Editar nombre de el tipo de producto</label>
                        <input name="nombre_equipo" id="name" type="text" class="form-control" value="{{$equipo->nombre_equipo}}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="name">Descripcion</label>
                        <input name="description" id="name" type="text" class="form-control" value="{{$equipo->logo}}">
                    </div>
                    <div class="form-group">
                        <label for="localidad_id">Localidad</label>
                        <select name="localidad_id" id="localidad_id" class="form-control" required>
                            <option value="{{$equipo->localidad_id}}">--{{$equipo->localidad}}--</option>
                            @foreach($localidades as $localidad)
                                <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                    <a href="{{ route('equipo.index') }}" class="btn btn-danger">Cancelar</a>
                    @endforeach
                </form>
        </div>
    </div>
</div>
@endsection
