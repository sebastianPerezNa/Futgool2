<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Equipos</title>
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: 'Arial', sans-serif;
        background: url('{{ asset('assets/chi.jpg') }}') center/cover no-repeat;
        color: #000;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }

form {
    max-width: 600px;
    width: 100%;
    padding: 20px;
    background-color: rgba(255, 255, 255, 0.8);
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    color: #000;
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
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    color: #333;
    background-color: #f5f5f5;
    box-sizing: border-box;
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

/* Estilos adicionales para el formulario de equipos */
.player-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.player-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 8px;
}

    </style>
</head>

<body>
<form id="registroEquiposForm" action="{{ route('registro_equipos.store') }}" method="post">
    @csrf
    <h1>Registro de Equipos</h1>

    <label for="nombre_equipo">Nombre de equipo:</label>
    <input type="text" id="nombre_equipo" name="nombre_equipo" required>

    <label for="jugadores">Jugadores:</label>
    <ul class="player-list">
        <li class="player-item">
            <input type="text" name="jugadores[0][nombre]" placeholder="Nombre jugador" required>
            <select name="jugadores[0][posicion]" required>
                <option value="Portero">Portero</option>
                <option value="Defensa">Defensa</option>
                <option value="MedioCampista">Medio Campista</option>
                <option value="Delantero">Delantero</option>
            </select>
            <input type="number" name="jugadores[0][edad]" placeholder="Edad" required>
        </li>
        <!-- Puedes agregar más jugadores aquí -->
    </ul>
    <button type="button" onclick="agregarJugador()">Agregar Jugador</button>

    <label for="cancha_local">Cancha Local (Opcional):</label>
    <input type="text" id="cancha_local" name="cancha_local">

    <button type="submit">Registrarse</button>
</form>

    <script>
        function agregarJugador() {
            const playerList = document.querySelector('.player-list');
            const newIndex = playerList.childElementCount;

            const newPlayerItem = document.createElement('li');
            newPlayerItem.classList.add('player-item');
            newPlayerItem.innerHTML = `
                <input type="text" name="jugadores[${newIndex}][nombre]" placeholder="Nombre jugador" required>
                <select name="jugadores[${newIndex}][posicion]" required>
                    <option value="Portero">Portero</option>
                    <option value="Defensa">Defensa</option>
                    <option value="MedioCampista">Medio Campista</option>
                    <option value="Delantero">Delantero</option>
                </select>
                <input type="number" name="jugadores[${newIndex}][edad]" placeholder="Edad" required>
            `;

            playerList.appendChild(newPlayerItem);
        }
    </script>
</body>

</html>
