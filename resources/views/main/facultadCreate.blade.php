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

        <form action="{{url('facultad') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input class="form-control" name="nombre" >
            </div>
            <div class="mb-3">
                <label class="form-label">Código</label>
                <input class="form-control" name="codigo" >
            </div>
            
            <button type="submit" class="btn btn-success"> Guardar </button>
        </form>
    </div>
@endsection