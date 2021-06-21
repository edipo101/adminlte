@extends('layout')

@section('title', 'Adminlte | Crear producto')

@section('content-header')
<h1>Registrar producto</h1>
@endsection

@section('content')
<div class="row">
	<div class="col-xs-12">
		<p>Formulario para el registro de producto.</p>
		<div class="box ">
			<div class="box-body">
				<form class="" action="">	
					<div class="row">
						<div class="form-group col-md-4">
							{{-- <label for="" class="">Nombre</label> --}}
							<input type="text" class="form-control" placeholder="Nombre de producto">
						</div>

						<div class="form-group col-md-7">
							{{-- <label for="" class="">Descripcion</label> --}}
							<input type="text" class="form-control" placeholder="Descripcion del producto">
						</div>
					</div>

					<div class="row">
						<div class="form-group col-md-5">
							<label>Minimal</label>
							<select class="form-control select2" style="width: 100%;">
								<option selected="selected">Alabama</option>
								<option>Alaska</option>
								<option>California</option>
								<option>Delaware</option>
								<option>Tennessee</option>
								<option>Texas</option>
								<option>Washington</option>
							</select>
						</div>	
					</div>
				</form>
			</div>

			<div class="box-footer">
				<button class="btn btn-primary">Guardar</button>
				<a href="{{route('products.index')}}" class="btn btn-danger">Cancelar</a>
			</div>
		</div>

		
	</div>
</div>
@endsection

@push('javascript')
<script type="text/javascript">
	$(document).ready(function(){
		$('.select2').select2();
	});
</script>
@endpush