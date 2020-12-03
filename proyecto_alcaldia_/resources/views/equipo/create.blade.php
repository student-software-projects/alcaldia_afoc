@extends('layouts.admin.app')
@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('equipo.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre del equipo</label>
                    <input type="text" id="name" class="form-control" name="nombre_equipo">
                </div>
                <div class="form-group">
                    <label for="logo">logo</label>
                    <input type="text" id="logo" class="form-control" name="logo">
                </div>
                <div class="form-group">
                    <label for="localidad_id">Localidad</label>
                    <select name="localidad_id" id="localidad_id" class="form-control" required>
                        <option value="">Busca la localidad</option>
                        @foreach($localidades as $localidad)
                            <option value="{{$localidad->id}}">{{$localidad->localidad}}</option>
                        @endforeach
                    </select>
                </div>
                <hr>
                <button class="btn btn-primary">Guardar Equipo</button>
                <a href="" class="btn btn-danger">Cancelar</a>
            </form>

        </div>
    </div>
</div>
@endsection
