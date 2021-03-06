@extends('layouts.admin')
{{-- <?php $message=Session::get('message')?> --}}
@include('alerts.success');
	@section('content')
	<table class="table">
		<thead>
			<th>Rut</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>País</th>
			<th>Ciudad</th>
			<th>Sector</th>
			<th>Operacion</th>
		</thead>
		@foreach($users as $user)
			<tbody>
				<td>{{$user->rut}}</td>
				<td>{{$user->name}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->country}}</td>
				<td>{{$user->city}}</td>
				<td>{{$user->sector}}</td>
				<td>
				{!! link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-primary'])!!}
				</td>
			</tbody>
		@endforeach
	</table>
	{!!$users->render()!!}


@endsection