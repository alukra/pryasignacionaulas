@extends('layout.layout')

@section('title', 'Tipo aulas')

@section('main')
    <div class="ibox-content">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('tipoaula/'. $tipoAula->id ) }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="id" value="{{ $tipoAula->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $tipoAula->nombre }}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Descripción</label>
                <textarea class="form-control" name="descripcion">{{ $tipoAula->descripcion }}</textarea>
            </div>
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection