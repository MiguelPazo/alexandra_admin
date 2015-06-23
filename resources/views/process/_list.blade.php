@extends('layout')

@section('content')
    <div class="container" ng-controller="processController">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Procesos</div>

                    <div class="panel-body">
                        <p>
                            <a class="btn btn-info" href="{{ route('process.create') }}" role="button">
                                Nuevo
                            </a>
                        </p>

                        <p>Se han creado {{ $lstProcess->total() }} procesos en total</p>
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
                                        <a href="{{ route('process_list_elections' , $process->id) }}">Eleccion</a>
                                        <a href="{{ route('process.edit', $process->id) }}">Editar</a>
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
    <script src="{{ asset('/js/app/services/processService.js') }}"></script>
    <script src="{{ asset('/js/app/controllers/processController.js') }}"></script>
@endsection
