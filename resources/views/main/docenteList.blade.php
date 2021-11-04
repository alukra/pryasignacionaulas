@extends('layout.layout')

@section('title', 'Docentes')

@section('main')
    <div class="ibox-content">
        <table class="table">
            <thead>
                <tr>
                    <th>nombre</th>
                    <th>email</th>
                    <th>telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($docentes as $docente)
                    <tr>
                        <td>{{ $docente->nombre}}</td>
                        <td>{{ $docente->email}}</td>
                        <td>{{ $docente->telefono}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('docente/'. $docente->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('docente/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection