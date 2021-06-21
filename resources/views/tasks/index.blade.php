@extends('layout')

@section('title', 'Tareas | AdminLTE')

@section('content-header')
<h1>Lista de tareas</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<p>La siguiente lista de tareas fueron registradas para ser realizadas esta semana. Si por alguna razón no se llegara a culminar la misma, entonces serán reprogramadas automática para la siguiente semana.</p>

		<div class="box">
			<div class="box-body">
				<table class="table table-bordered table-hover table-striped" style="width: 100%">
					<thead>
						<tr>
							<th>Nro.</th>
							<th>Nombre</th>
							<th>Descripcion</th>
							<th>Prioridad</th>
							<th>Programado para</th>
							<th>Tiempo estimado</th>
						</tr>
					</thead>
					<tbody>
						
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection

@push('javascript')
<script type="text/javascript">
	$(document).ready(function(){
		$('table').DataTable({
			'ajax': {
				'url': "{{route('api.tasks')}}",
				'dataSrc': 'data'
			},
			'columns': [
				{'data': 'id'},
				{'data': 'name'},
				{'data': 'description'},
				{'data': 'priority'},
				{'data': 'scheduled_date'},
				{'data': 'duration_estimate'},
			]
		});
	});
</script>
@endpush