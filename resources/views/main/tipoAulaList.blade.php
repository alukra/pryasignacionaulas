@extends('layout.layout')

@section('title', 'Tipo de Aulas')

@section('main')
    <div class="ibox-content">
        <table class="table">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tipoAulas as $tipoAula)
                    <tr>
                        <td>{{ $tipoAula->nombre}}</td>
                        <td>{{ $tipoAula->descripcion}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('tipoaula/'. $tipoAula->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('tipoaula/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection