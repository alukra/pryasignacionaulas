@extends('layout.layout')

@section('title', 'Aulas')

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

        <form action="{{url('aula/'. $aula->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $aula->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $aula->nombre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">ubicacion</label>
                <input class="form-control" name="ubicacion" value="{{ $aula->ubicacion }}" >
            </div>
            <div class="mb-3">
                <label class="form-label">Capacidad (personas)</label>
                <input class="form-control" name="capacidad" type="number" min="1" max="200" step="1" value="{{ $aula->capacidad }}">
            </div>
            <select class="form-control m-b" name="tipo_aula_id">
                @foreach ($tipoAulas as $tipoAula)
                    <option value="{{ $tipoAula->id }}" @if($tipoAula->id == $aula->tipo_aula_id) selected @endif> {{ $tipoAula->nombre}}</option>
                @endforeach
            </select>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection