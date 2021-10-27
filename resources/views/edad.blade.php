<!DOCTYPE html>
<html>
<head>
	<title>Edad</title>
</head>
<body>
	<a href="{{ route('inicio') }}">Volver</a>
	<form action="" method="POST">
		@csrf
		<input type="date" name="fecha" max="{{ $hoy }}">
		<input type="submit" value="Enviar">
	</form>

	@if($diferencia)
	<p>Han pasado {{ $diferencia->y }} años, {{ $diferencia->m }} meses y {{ $diferencia->d }} días.</p>
	@endif
</body>
</html>