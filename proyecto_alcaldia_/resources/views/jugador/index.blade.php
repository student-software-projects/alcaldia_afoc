@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

            <a class="btn btn-success mt-4 mb-3" href="{{ route('jugador.create')}}">CREAR UN EQUIPO</a>
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
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                        <th>NUMERO CAMISA</th>
                        <th>APODO</th>
                        <th>EQUIPO</th>
                        <th>OPCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jugadores  as $jugador)
                        <tr>
                            <td>{{ $jugador->id }}</td>
                            <td>{{ $jugador->nombres}}</td>
                            <td>{{ $jugador->apellidos}}</td>
                            <td>{{ $jugador->numero_camisa}}</td>
                            <td>{{ $jugador->apodo }}</td>
                            <td>{{ $jugador->nombre_equipo}}</td>
                            <td>
                                <form action="{{ route('jugador.destroy',$jugador->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('jugador.show',$jugador->id) }}" class="btn btn-sm btn-info">Detalles</a>
                                    <a href="{{route('jugador.edit',$jugador->id) }}" class="btn btn-sm btn-warning">Editar</a>
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
