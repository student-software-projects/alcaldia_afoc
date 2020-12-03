@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            @foreach($jugadores as $jugador)
                <form action="{{route('jugador.update',$jugador->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group mt-4">
                        <label for="name">Editar nombre de el jugador</label>
                        <input name="nombres" id="name" type="text" class="form-control" value="{{$jugador->nombres}}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="name">Editar apellidos de el jugador</label>
                        <input name="apellidos" id="name" type="text" class="form-control" value="{{$jugador->apellidos}}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="name">Numero de la camisa</label>
                        <input name="numero_camisa" id="name" type="text" class="form-control" value="{{$jugador->numero_camisa}}">
                    </div>
                    <div class="form-group mt-4">
                        <label for="name">Apodo</label>
                        <input name="apodo" id="name" type="text" class="form-control" value="{{$jugador->apodo}}">
                    </div>
                    <div class="form-group">
                        <label for="equipo_id">Equipo</label>
                        <select name="equipo_id" id="equipo_id" class="form-control" required>
                            <option value="{{$jugador->equipo_id}}">--{{$jugador->nombre_equipo}}--</option>
                            @foreach($equipos as $equipo)
                                <option value="{{$equipo->id}}">{{$equipo->nombre_equipo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                    <a href="{{ route('jugador.index') }}" class="btn btn-danger">Cancelar</a>
                    @endforeach
                </form>
        </div>
    </div>
</div>
@endsection
