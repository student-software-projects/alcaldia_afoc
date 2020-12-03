@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <form action="{{ route('localidad.update',$localidad->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mt-5">
                    <label for="name">Editar nombre de la localidad</label>
                    <input name="localidad" id="name" type="text" class="form-control" value="{{ $localidad->localidad}}">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">GUARDAR CAMBIOS</button>
                <a href="{{ route('localidad.index') }}" class="btn btn-danger">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection
