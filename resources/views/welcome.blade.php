<html lang="{{ app()->getLocale() }}">
<head>
</head>
<body>
<form action="comprobarMes" method="post">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    NombreTrabajador: <input type="text" name="nombre" />
    Mes seleccionado: <input type="text" name="mes" />
    <input type="submit" value="enviar"/>
</form>
</body>
</html>