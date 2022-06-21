<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Usuario</title>
</head>
<body>
    <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="paterno">Apellido Paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno" placeholder="">
        </div>
        <div class="form-group">
            <label for="materno">Apellido Materno</label>
            <input type="text" class="form-control" id="materno" name="materno" placeholder="">
        </div>
        <div class="form-group">
            <label for="login">Email</label>
            <input type="email" class="form-control" id="login" name="login" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="password_confirmation">Confirmar Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar Password">
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
    
</body>
</html>
<!--script para guardar usuario en la base de datos-->
<script>
    var form = document.getElementsByTagName('form')[0];
    form.addEventListener('submit', function(e){
        e.preventDefault();
        var nombre = document.getElementById('nombre').value;
        var paterno = document.getElementById('paterno').value;
        var materno = document.getElementById('materno').value;
        var login = document.getElementById('login').value;
        var password = document.getElementById('password').value;
        var password_confirmation = document.getElementById('password_confirmation').value;
        var data = {
            nombre: nombre,
            paterno: paterno,
            materno: materno,
            login: login,
            password: password,
            password_confirmation: password_confirmation
        };
        fetch('/api/registrar', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(function(response){
            return response.json();
        })
        .then(function(data){
            console.log(data);
            if(data.status == 'success'){
                alert('Usuario registrado correctamente');
                window.location.href = '/RegistrarUsuario';
            }else{
                alert('Error al registrar usuario');
            }
        })
        .catch(function(error){
            console.log(error);
        });
    });
</script>


