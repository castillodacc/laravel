@extends('layout')

@section('content')

 <h1>Editar</h1>
	<form method="post" action="{{ route('messages.update', $dato->id) }}"> 
		{!! method_field('PUT') !!}
		{!! csrf_field() !!}
		<label for="nombre">Nombre</label>
		<input type="text" name="nombre" id="nombre" value="{{ $dato->nombre }}"> 
		{!! $errors->first('nombre','<span class=error>:message</span>') !!}
		<label for="email">Correo</label>
		<input type="text" name="email" placeholder="E-mail" value="{{ $dato->email }}" id="email"> 
		{!! $errors->first('email','<span class=error>:message</span>') !!}
		<label for="tel">Teléfono</label>
		<input type="text" name="phone" id='tel' value="{{ $dato->phone }}">
		{!! $errors->first('phone','<span class=error>:message</span>') !!}
		<label for="mensaje">Asunto</label>
		<textarea name="mensaje" id="mensaje" cols="30" rows="10">{{ $dato->asunto }}</textarea>
		{!! $errors->first('mensaje','<span class=error>:message</span>') !!}
		<input type="submit" value="Actualizar">
	</form> 
@stop