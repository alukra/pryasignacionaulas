@extends('layout.layout')

@section('title', 'Facultades')

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

        <form action="{{url('facultad/'. $facultad->id ) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="hidden" name="id" value="{{ $facultad->id }}" />
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" value="{{ $facultad->nombre }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" value="{{ $facultad->codigo }}" >
            </div>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection