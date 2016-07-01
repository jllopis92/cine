@extends('layouts.admin')
	@section('content')
@include('alerts.request')
@include('alerts.errors')
<div class="header-info">
				<h3>INGRESO DE USUARIO</h3>
				{!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
					<div class="form-group">
						{!!Form::label('correo','Correo:')!!}	
						{!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'Ingresa tu correo'])!!}
					</div>
					<div class="form-group">
						{!!Form::label('contrasena','Contraseña:')!!}	
						{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Ingresa tu contraseña'])!!}
					</div>
					{!!Form::submit('Enviar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
</div>
@endsection