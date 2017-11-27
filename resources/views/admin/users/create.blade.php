@extends('main')

@section('title','Crear Usuario')

@section('content')

	<form method="POST" action="{{ route('admin.users.store') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">ID</label>
			<input type="text" class="form-control" name="id">
		</div>
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name">
		</div>
		<div class="form-group">
			<label for="password">Clave</label>
			<input type="password" class="form-control" name="password" placeholder="*****">
		</div>
		<div class="form-group">
			<label for="email">Correo</label>
			<input type="email" class="form-control" name="email" placeholder="a@b.cl">
		</div>
		<div class="form-group">
			<input type="submit" name="" class="btn btn-primary" value="Crear">
		</div>
		
	</form>
@endsection