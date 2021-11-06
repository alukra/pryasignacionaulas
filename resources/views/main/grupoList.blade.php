@extends('layout.layout')

@section('title', 'Grupos')

@section('cssExtra')
<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
@show

@section('scriptExtra')
<script src="js/plugins/dataTables/datatables.min.js"></script>
<script>
    $(document).ready(function(){
            $('.table').DataTable({
                pageLength: 25,
                responsive: true
            });
        });
</script>
@show

@section('main')
    <div class="ibox-content">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>docente</th>
                    <th>materia</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grupos as $grupo)
                    <tr>
                        <td>{{ $grupo->docente }}</td>
                        <td>{{ $grupo->materia }}</td>
                        <td>{{ $grupo->nombre}}</td>
                        <td><a class="btn btn-outline-primary" href="{{ url('grupo/'. $grupo->id . '/edit' )}}">Editar</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a href="{{ url('grupo/create') }}" class="btn btn-outline-secondary" >Nuevo</a>
    </div>
@endsection