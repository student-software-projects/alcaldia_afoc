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
                    @foreach($equipos as $equipo)
                        <tr>
                            <th>NOMBRE DEL EQUIPO</th>
                            <td>{{$equipo->nombre_equipo}}</td>
                        </tr>
                        <tr>
                            <th>LOGO</th>
                            <td>{{$equipo->logo}}</td>
                        </tr>
                        <tr>
                            <th>LOCALIDAD</th>
                            <td>{{ $equipo->localidad}}</td>
                        </tr>
                        <tr>
                            <th>CREACIÓN</th>
                            <td>{{ $equipo->created_at}}</td>
                        </tr>
                        <tr>
                            <th>ACTUALIZACION</th>
                            <td>{{ $equipo->updated_at}}</td>
                        </tr>
                    @endforeach
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('equipo.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
