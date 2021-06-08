@extends('layout')

@section('title', 'Almacenes | Productos')

@section('content-header')
<h1>Lista de productos</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-body">
				<table id="table" class="table table-bordered table-hover table-striped" style="width:100%">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Descripción</th>
							<th>Categoria</th>
							<th>Unid. Medida</th>
							<th>Perecero</th>
							{{-- <th></th> --}}
						</tr>
					</thead>
					<tbody>
						{{-- @foreach($products as $product)
						<tr data-id={{$product->id}}>
							<td>{{$product->id}}</td>
							<td>{{$product->name}}</td>
							<td>{{$product->description}}</td>
							<td>{{$product->category}}</td>
							<td>{{$product->measure}}</td>
							<td>{{$product->perisable}}</td>
							<td><button class="delete btn btn-xs btn-primary">Eliminar</button></td>
						</tr>
						@endforeach --}}
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
			"ajax": {
				// "url": "https://jsonplaceholder.typicode.com/posts",
				"url": "{{route('api.products')}}",
				"dataSrc": "data"
			},
			"columns": [
			{ "data": "id" },
			{ "data": "name" },
			{ "data": "description" },
			{ "data": "category.name" },
			{ "data": "measure" },
			{ "data": "perisable" }
			]
		});

		$('.delete').click(function(){
			let id = $(this).parent().parent().data('id');
			console.log(id);
		});
	});
</script>
@endpush