@extends('main')

@section('title','Editar Tag ' . $tag->name)

@section('content')

	<form method="POST" action="{{ route('admin.tags.update',$tag->id) }}">
		{{ csrf_field() }}
		<input name="_method" type="hidden" value="PUT">
		<div class="form-group">
			<label for="name">Nombre</label>
			<input type="text" class="form-control" name="name" value="{{$tag->name}}">
		</div>
		<div class="form-group">
			<input type="submit" name="" class="btn btn-primary" value="Actualizar">
		</div>
		
	</form>
@endsection