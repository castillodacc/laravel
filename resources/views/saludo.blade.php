@extends('layout')

@section('content')

<p>Nos esta saludando {{ $nombre }}</p>
<ul>
@forelse($consola as $consolas)
	<li>{{ $consolas }}</li>
@empty
	<p>No hay consolas</p>
@endforelse

@if(count($consola === 1))
	<p>Hay 1 consola</p>
@elseif(count($consola) > 1)
	<p>Hay más de una consola </p>
@endif
</ul>
@stop