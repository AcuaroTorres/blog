@extends('main')

@section('title','Crear Tags')

@section('content')
	

	<form method="POST" action="{{ route('admin.tags.store') }}">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name" placeholder="Nombre del tag">
		</div>
		<div class="form-group">
			<input type="submit" name="" class="btn btn-primary" value="Crear">
		</div>
	</form>

@endsection
