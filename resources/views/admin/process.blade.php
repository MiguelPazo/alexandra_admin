@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Procesos</div>
                    <p>Se han creado {{ $lstProcess->total() }} procesos en total</p>

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{ route('admin.process.create') }}" role="button">
                                Nuevo
                            </a>
                        </p>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre del Proceso</th>
                                <th>Fecha de Inicio</th>
                                <th>Fecha de Fin</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($lstProcess as $process)
                                <tr>
                                    <td>{{ $process->id }}</td>
                                    <td>{{ $process->alias }}</td>
                                    <td>{{ $process->description }}</td>
                                    <td>{{ $process->date_begin }}</td>
                                    <td>{{ $process->date_end }}</td>
                                    <td>{{ $process->status }}</td>
                                    <td>
                                        <a href="{{ url('admin/process/' . $process->id .'/elections ') }}">Eleccion</a>
                                        <a href="{{ route('admin.process.edit', $process->id) }}">Editar</a>
                                        <a href="">Eliminar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                        {!! $lstProcess->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
