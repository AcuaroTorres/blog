@extends('main')

@section('title','Editar Usuario' . $user->name)

@section('content')

	<form method="POST" action="{{ route('admin.users.update',$user->id) }}">
		{{ method_field('PUT') }} {{ csrf_field() }}
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name" value="{{$user->name}}">
		</div>
		<div class="form-group">
			<label for="email">Correo</label>
			<input type="email" class="form-control" name="email" value="{{$user->email}}">
		</div>
		<div class="form-group">
			<input type="submit" name="" class="btn btn-primary" value="Actualizar">
		</div>
		
	</form>
@endsection