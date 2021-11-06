@extends('layout.layout')

@section('title', 'Facultades')

@section('main')
    <div class="ibox-content">
        <table class="table">
            <thead>
                <tr>
                    <th>código</th>
                    <th>nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($facultades as $facultad)
                    <tr>
                        <td>{{ $facultad->codigo}}</td>
                        <td>{{ $facultad->nombre}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('facultad/'. $facultad->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('facultad/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection