@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Procesos</div>
                    <div class="panel-body">
                        <a href="{{ route('process.list') }}"><--- Back</a>
                        <table class="table table-striped">
                            <tr>
                                <th>#</th>
                                <th>Alias</th>
                                <th>Nombre de la Elección</th>
                                <th>Fecha de Sufragio</th>
                                <th>Votos Permitidos</th>
                                <th>Acciones</th>
                            </tr>
                            @foreach($lstElection as $election)
                                <tr>
                                    <td>{{ $election->id }}</td>
                                    <td>{{ $election->alias }}</td>
                                    <td>{{ $election->description }}</td>
                                    <td>{{ $election->date }}</td>
                                    <td>{{ $election->count_votes }}</td>
                                    <td>
                                        <a href="">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="" popover-placement="bottom" popover="Sí - No"
                                           popover-trigger="focus" popover-title="¿Esta seguro?">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
