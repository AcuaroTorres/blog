@extends('main')

@section('title','Crear Categorias')

@section('content')
	

	<form method="POST" action="{{ route('admin.categories.store') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name" placeholder="Nombre de la categoría">
		</div>
		<div class="form-group">
			<input type="submit" name="" class="btn btn-primary" value="Crear">
		</div>
	</form>

@endsection