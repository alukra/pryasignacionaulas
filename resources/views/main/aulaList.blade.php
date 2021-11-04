@extends('layout.layout')

@section('title', 'Aulas')

@section('main')
    <div class="ibox-content">
        <table class="table">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>ubicación</th>
                    <th>capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($aulas as $aula)
                    <tr>
                        <td>{{ $aula->nombre}}</td>
                        <td>{{ $aula->ubicacion}}</td>
                        <td>{{ $aula->capacidad}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('aula/'. $aula->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('aula/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection