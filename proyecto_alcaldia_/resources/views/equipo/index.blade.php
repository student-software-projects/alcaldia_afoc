@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-success mt-4 mb-3" href="{{ route('equipo.create')}}">CREAR UN EQUIPO</a>
            @if(session('message'))
                <div class="alert alert-{{session('type')}}" role="alert">
                    {{session('message')}}
                </div>
            @endif
            <div class="table-resposive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE DEL EQUIPO</th>
                        <th>LOGO</th>
                        <th>LOCALIDAD</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($equipos  as $equipo)
                        <tr>
                            <td>{{ $equipo->id }}</td>
                            <td>{{ $equipo->nombre_equipo}}</td>
                            <td>{{ $equipo->logo }}</td>
                            <td>{{ $equipo->localidad}}</td>
                            <td>
                                <form action="{{ route('equipo.destroy',$equipo->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('equipo.show',$equipo->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('equipo.edit',$equipo->id) }}" class="btn btn-sm btn-warning">Editar</a>
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
