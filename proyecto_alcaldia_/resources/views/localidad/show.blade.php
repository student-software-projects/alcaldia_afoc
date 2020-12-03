<!doctype html>
<html lang="en">
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
                    <tr>
                        <th>NOMBRE</th>
                        <td>{{ $localidad->localidad}}</td>
                    </tr>
                    <tr>
                        <th>CREACIÓN</th>
                        <td>{{ $localidad->created_at }}</td>
                    </tr>
                    <tr>
                        <th>ACTUALIZACION</th>
                        <td>{{ $localidad->updated_at }}</td>
                    </tr>
                </table>
                <a class="btn btn-primary btn-sm" href="{{ route('localidad.index') }}">Volver</a>
            </div>
        </div>
    </div>
</div>
@endsection
