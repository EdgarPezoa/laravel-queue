<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Laravel - Queue</title>
</head>
<body>
    <h1>Formulario Laravel - Queue</h1>
    <form action={{route('contacto')}} method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input name="nombre" id="nombre" type="text">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje</label>
            <input name="mensaje" id="mensaje" type="text">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </form>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>