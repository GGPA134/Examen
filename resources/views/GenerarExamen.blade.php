<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Generar Examen</title>
</head>
<body>
    <!-- Formulario para generar examen -->
    <form action="{{ route('/api/generarExamen') }}" method="POST">
        @csrf
        <label for="">Seleccione el examen:</label>
        <select name="examen" id="examen">
            @foreach ($examenes as $examen)
                <option value="{{ $examen->idExamen }}">{{ $examen->numPreguntas }}</option>
            @endforeach
        </select>
        <input type="submit" value="Generar Examen">
    </form>    
</body>
</html>
<script>
    // Script para que el select seleccione el examen que se quiere generar
    var examen = document.getElementById('examen');
    var examenSeleccionado = '{{ $examenSeleccionado }}';
    examen.value = examenSeleccionado;
</script>