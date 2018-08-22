@extends('layout')

@section('content')

	<h1>Formulario enviado con éxito</h1>

	<table width="100%" border="1">
		<thead>
			<th>id</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Teléfono</th>
			<th>Mensaje</th>
			<th colspan="2">Acción</th>
		</thead>
		<tbody>
			@foreach($datos AS $dato)
			<tr>
				<td><a href="{{ route("messages.show", $dato->id)}}">{{ $dato->id }}</a></td>
				<td>{{ $dato->nombre }}</td>
				<td>{{ $dato->email }}</td>
				<td>{{ $dato->phone }}</td>
				<td>{{ $dato->asunto }}</td>
				<td><a href="{{ route("messages.edit", $dato->id) }}">Editar</a></td>
				<td><form method="POST" action="{{ route('messages.destroy', $dato->id) }}">
					{!! method_field('delete') !!}
					{!! csrf_field() !!}
					<input type="submit" value="Borrar">
					
				</form></td>
			</tr>
			@endforeach
		</tbody>
	</table>

@stop