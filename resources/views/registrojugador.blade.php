<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Jugador</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url('{{ asset('assets/cru.jpg') }}') center/cover;
            color: #000;
        }

        /* Estilos para el formulario */
        form {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: #000;
            position: relative; /* Añadido para posicionar el mensaje correctamente */
        }

        h1 {
            text-align: center;
            color: #000;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            color: #000;
            background-color: #f5f5f5;
        }

        button {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #45a049;
        }

        button {
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.2);
        }

        /* Estilos generales para el mensaje */
        .message-container {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Estilos para el mensaje de éxito */
        .success-message {
            background-color: #4CAF50; /* Verde */
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            animation: fadeInUp 0.5s ease-out; /* Animación de entrada */
        }

        /* Estilos para el mensaje de error */
        .error-message {
            background-color: #F44336; /* Rojo */
            color: #fff;
            padding: 20px;
            border-radius: 5px;
            animation: fadeInUp 0.5s ease-out; /* Animación de entrada */
        }

        /* Animación de entrada */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    @if(session('success') || session('error'))
        <div class="message-container">
            @if(session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="error-message">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    @endif

    <form id="registroForm" action="{{ route('registro.store') }}" method="post">
        @csrf
        <h1>Registro de Jugador</h1>

        <label for="nombre">Nombre jugador:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>

        <label for="edad">Edad:</label>
        <input type="number" id="edad" name="edad" required>

        <label for="posicion">Posición:</label>
        <select id="posicion" name="posicion" required>
            <option value="Portero">Portero</option>
            <option value="Defensa">Defensa</option>
            <option value="MedioCampista">Medio Campista</option>
            <option value="Delantero">Delantero</option>
        </select>

        <button type="submit">Registrarse</button>
    </form>
</body>

</html>
