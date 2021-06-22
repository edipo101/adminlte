@extends('layout')

@section('title', 'Almacenes | Productos')

@section('content-header')
<div class="pull-right">
	<a href="{{route('products.create')}}" class="btn btn-primary"><i class="fa fa-fw fa-file-o"></i> Nuevo Producto</a>
</div>
<h1>Productos</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">

		<p>Productos registrados en el sistema. </p>
		
		<div class="box">
			<div class="box-body">
				
				<table id="table" class="table table-bordered table-hover table-striped" style="width:100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Detalle</th>
							<th>Categoría</th>
							<th>PrecioCompra</th>
							<th>PrecioVenta</th>
							<th>Utilidad</th>
							<th>...</th>
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
		$('#table').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
			},
			"ajax": {
				"url": "{{route('products.datatable')}}",
				"dataSrc": "data"
			},
			buttons: ['csv', 'excel', 'print'],
			"columns": [
				{ "data": "id" },
				{ "data": "details" },
				{ "data": "category.name" },
				{ "data": "purchase_price" },
				{ "data": "sale_price" },
				{ "data": "utility" },
				{ "data": "actions" },
			]
		});

		$('.delete').click(function(){
			let id = $(this).parent().parent().data('id');
			console.log(id);
		});
	});
</script>
@endpush