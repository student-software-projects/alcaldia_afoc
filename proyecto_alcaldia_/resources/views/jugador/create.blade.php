@extends('layouts.admin.app')
@section('content')
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
@endsection
