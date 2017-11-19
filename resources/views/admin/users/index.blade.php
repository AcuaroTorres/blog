@extends('main')

@section('title', 'Lista de Usuarios')

@section('content')
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>
					@if($user->id == 1)
					<span class="label label-primary">{{ $user->id }}</span>
					@else
					<span class="label label-danger">{{ $user->id }}</span>
					@endif
				</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td><a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('admin.users.destroy', $user->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	{{ $users->render() }}
@endsection