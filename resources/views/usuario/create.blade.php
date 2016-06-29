@extends('layouts.admin')
	@section('content')
	{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
	<div class="form-group">
		{!!Form::label('nombre','Nombre:')!!}
		{!!Form::text('name',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('email','Correo:')!!}
		{!!Form::text('email',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('rut','Rut:')!!}
		{!!Form::text('rut',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Contraseña:')!!}
		{!!Form::password('password',['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('pais','País:')!!}
		{!!Form::text('country',null,['class'=>'form-control'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('ciudad','Ciudad:')!!}
		{!!Form::text('city',null,['class'=>'form-control'])!!}
	</div>
	{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
@endsection