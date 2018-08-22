@extends('layout')

@section('content')

@if(session()->has('info'))
	{{ session('info') }}
@else
	<h1>Formulario</h1>
	<form method="post" action="{{ route('messages.store') }}">
		<!--<input type="hidden" value="{{ csrf_token() }}">-->
		{!! csrf_field() !!}
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" value="{{ old('nombre') }}"> 
		{!! $errors->first('nombre','<span class=error>:message</span>') !!}
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}" id="email"> 
		{!! $errors->first('email','<span class=error>:message</span>') !!}
		<label for="tel">Teléfono</label>
		<input type="text" name="phone" id='tel' value="{{ old('phone') }}">
		{!! $errors->first('phone','<span class=error>:message</span>') !!}
		<label for="mensaje">Asunto</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea>
		{!! $errors->first('mensaje','<span class=error>:message</span>') !!}
		<input type="submit" value="Enviar">
	</form>
@endif
@stop