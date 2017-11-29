@extends('main')

@section('title', 'Lista de Tags')

@section('content')

	<form method="GET" action="{{ route('admin.tags.index') }}" class="navbar_form pull-right">
		<div class="input-group">
			<input type="text" class="form-control" name="name" placeholder="Buscar Tag">
			<span class="input-group-addon" id="search">
				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
			</span>
		</div>
	</form>
		{{ csrf_field() }}
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($tags as $tag)
			<tr>
				<td>{{ $tag->id }}</td>
				<td>{{ $tag->name }}</td>
				<td><a href="{{ route('admin.tags.edit',$tag->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('admin.tags.destroy',$tag->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $tags->render() }}
@endsection