<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<style>
    body {
    margin: 0;
    padding: 0;
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f4;

}
#backButton {
      position: absolute;
      left: 10px;
      top: 50%;
      transform: translateY(-50%);
      background-color: #3498db;
      color: #fff;
      border: none;
      padding: 10px;
      border-radius: 5px;
      cursor: pointer;
    }

.container {
    max-width: 400px;
    margin: 50px auto;
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form {
    display: flex;
    flex-direction: column;
}

h1 {
    text-align: center;
    font-size: 1.5em;
    margin-bottom: 20px;
    color: #333;
}

label {
    margin: 10px 0;
    color: #333;
}

input {
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    background-color: #3498db;
    color: #fff;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #2184b8;
}
.success-message {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    text-align: center;
}

</style>
</head>
<body style="background-image: url('{{ asset('assets/regis.jpg') }}'); background-size: cover; background-position: center;">

    <header style="background-color: #3498db; padding: 20px; text-align: center;">
        <a id="backButton" href="{{ url('/') }}">
        <i class="fas fa-arrow-left"></i>
        Volver a la página principal
        </a>
    <h1 style="color: #fff;">Registro</h1>

    </header>
    <div class="container">
    @if(session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <form id="registroForm" action="{{ route('registrousuario.store') }}" method="post">
    @csrf
            <h1>Registro de Usuario</h1>

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>

            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>

            <label for="usuario">Usuario:</label>
            <input type="text" id="usuario" name="usuario" required>

            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>

            <button type="submit">Registrar</button>
        </form>
    </div>
</body>
</html>
