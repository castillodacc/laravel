@extends('layout')

@section('content')

	<h1>Formulario</h1>
	<form method="post" action="contacto">
		<input type="hidden" value="{{ csrf_token() }}">
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre">
		<label for="correo">Correo</label>
		<input type="text" name="correo" placeholder="E-mail" id="correo">
		<label for="mensaje">Asunto</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
		<input type="submit" value="Enviar">
	</form>

@stop