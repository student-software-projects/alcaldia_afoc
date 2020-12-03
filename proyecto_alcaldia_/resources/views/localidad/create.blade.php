@extends('layouts.admin.app')
@section('content')

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
@endsection
