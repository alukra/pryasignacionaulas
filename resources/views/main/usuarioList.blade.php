@extends('layout.layout')

@section('title', 'Usuarios')

@section('main')
    <div class="ibox-content">
        <table class="table">
            <thead>
                <tr>
                    <th>usuario</th>
                    <th>nombre</th>
                    <th>correo</th>
                    <th>rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->usuario}}</td>
                        <td>{{ $usuario->nombre}}</td>
                        <td>{{ $usuario->correo }}</td>
                        <td>{{ $usuario->rol}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('usuario/'. $usuario->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('usuario/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection