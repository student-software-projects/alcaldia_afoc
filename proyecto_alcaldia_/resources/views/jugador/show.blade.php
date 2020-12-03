@extends('layouts.admin.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-4">
            <div class="table-responsive">
                @if(session('message'))
                    <div class="alert alert-{{session('type')}}" role="alert">
                        {{session('message')}}
                    </div>
                @endif
                <table class="table table-bordered">
                    @foreach($jugadores as $jugador)
                        <tr>
                            <th>NOMBRES</th>
                            <td>{{$jugador->nombres}}</td>
                        </tr>
                        <tr>
                            <th>APELLIDOS</th>
                            <td>{{$jugador->apellidos}}</td>
                        </tr>
                        <tr>
                            <th>NUMERO CAMISA</th>
                            <td>{{$jugador->numero_camisa}}</td>
                        </tr>
                        <tr>
                            <th>APODO</th>
                            <td>{{$jugador->apodo}}</td>
                        </tr>
                        <tr>
                            <th>EQUIPO</th>
                            <td>{{$jugador->nombre_equipo}}</td>
                        </tr>
                        <tr>
                            <th>CREACIÓN</th>
                            <td>{{ $jugador->created_at}}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $jugador->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('jugador.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection

