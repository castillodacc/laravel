@extends('layout')

@section('content')

	<h1>Formulario</h1>
	<form method="post" action="contacto">
		<input type="hidden" value="{{ csrf_token() }}">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"> 
		{!! $errors->first('nombre','<span class=error>:message</span>') !!}
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" id="email"> 
		{!! $errors->first('email','<span class=error>:message</span>') !!}
		<label for="mensaje">Asunto</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
		{!! $errors->first('mensaje','<span class=error>:message</span>') !!}
		<input type="submit" value="Enviar">
	</form>

@stop