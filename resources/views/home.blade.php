@extends('layout')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Panel de Control</div>

				<div class="panel-body">
                    <a href="{{ route('process.list') }}">Procesos ---></a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
