<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Partido Amistoso</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
     body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      text-align: center;
      background: url('{{ asset('assets/amis1.jpg') }}') center/cover;
    }

    header {
      background-color: #3498db;
      padding: 10px;
      color: #fff;
      position: relative;
    }

    h1 {
      font-size: 2em;
      margin: 0;
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
    #partidoProgramado {
      display: flex;
      flex-direction: row;
      justify-content: space-between;
      background-color: rgba(46, 204, 113, 0.7);
      border-radius: 10px;
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
    }

    #tituloPartido {
      color: #fff;
      font-size: 1.5em;
      margin-bottom: 10px;
      text-align: center;
    }

    .equipo {
      text-align: center;
      margin: 10px;
      flex: 1;
      background-color: rgba(52, 152, 219, 0.7);
      padding: 15px;
      border-radius: 10px;
    }

    .vs {
      font-size: 2em;
      margin: 10px;
      color: #fff;
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .equipo img {
      width: 150px;
      border-radius: 50%;
    }

    .equipo p {
      color: #333;
      font-size: 1.2em;
      margin: 5px 0;
    }

    #horaPartido {
      color: #fff;
      font-size: 1.2em;
      margin-top: 10px;
    }

    #concretarPartido {
      display: flex;
      flex-direction: column;
      align-items: center;
      background-color: rgba(46, 204, 113, 0.7);
      border-radius: 10px;
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
    }

    #concretarPartido h2 {
      color: #fff;
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .botonAgregarEquipo {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
    }

    #formContainerIzquierda,
    #formContainerDerecha {
      display: none;
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    label {
      margin: 10px 0;
    }

    input,
    select {
      width: 100%;
      padding: 10px;
      margin: 5px 0;
      box-sizing: border-box;
    }

    button[type="submit"] {
      background-color: #3498db;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 10px;
    }

    #resultadosContainerIzquierda,
    #resultadosContainerDerecha {
      text-align: left;
      background-color: rgba(255, 255, 255, 0.7);
      border-radius: 10px;
      padding: 15px;
      margin: 20px 0;
      width: 100%;
    }

    .equipoResultado {
      background-color: transparent;
      border-radius: 10px;
      margin: 10px 0;
    }

    .equipoResultado img {
      width: 100px;
      border-radius: 50%;
    }

    .vsResultado {
      font-size: 2em;
      color: #fff;
      margin: 20px;
    }
    #concretarAmistosoBtn {
      background-color: #3498db;
      color: #fff;
      padding: 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 20px;
      pointer-events: none; /* Inicialmente deshabilita el clic en el botón */
    }

    #concretarAmistosoBtn.enabled {
      pointer-events: auto; /* Habilita el clic en el botón cuando tiene la clase 'enabled' */
      background-color: #2ecc71; /* Cambia el color de fondo cuando está habilitado */
    }

    #mensajeExito {
      display: none;
      color: #2ecc71;
      font-size: 1.2em;
      margin-top: 10px;
    }
    #amistososRegistrados {
      background-color: rgba(46, 204, 113, 0.7);
      border-radius: 10px;
      padding: 20px;
      margin: 20px auto;
      max-width: 800px;
    }

    #amistososRegistrados h2 {
      color: #fff;
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    #tablaAmistosos {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    #tablaAmistosos th, #tablaAmistosos td {
      border: 1px solid #fff;
      padding: 10px;
      text-align: left;
    }

    #tablaAmistosos th {
      background-color: #3498db;
      color: #fff;
    }

    #tablaAmistosos tr:nth-child(even) {
      background-color: rgba(52, 152, 219, 0.7);
    }

    #tablaAmistosos tr:nth-child(odd) {
      background-color: rgba(46, 204, 113, 0.7);
    }
  </style>
</head>
<body>
<header>
    <!-- Cambia el botón por un enlace -->
    <a id="backButton" href="{{ url('/') }}">
      <i class="fas fa-arrow-left"></i>
      Volver a la página principal
    </a>
    <h1>Partido Amistoso</h1>
  </header>
  <div id="partidoProgramado">
    <div id="tituloPartido">Partido Programado</div>
    <div class="equipo">
      <img src="{{ asset('assets/e1.jpg') }}" alt="Equipo 1">
      <p>Nombre Equipo 1</p>
      <p>Capitán: Nombre Random</p>
      <p>Comuna: Santiago</p>
    </div>
    <div class="vs">VS</div>
    <div class="equipo">
      <img src="{{ asset('assets/e2.jpg') }}" alt="Equipo 2">
      <p>Nombre Equipo 2</p>
      <p>Capitán: Nombre Random</p>
      <p>Comuna: Santiago</p>
    </div>
    <div id="horaPartido">Hora: 18:00</div>
  </div>

  <div id="concretarPartido">
    <h2>Concretar Amistoso</h2>
    <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
      <button class="botonAgregarEquipo" id="agregarEquipoIzquierda">Agregar Equipo Izquierda</button>
      <button class="botonAgregarEquipo" id="agregarEquipoDerecha">Agregar Equipo Derecha</button>
    </div>

    <div id="formContainerIzquierda">
      <form id="equipoFormIzquierda">
        <label for="nombreEquipoIzquierda">Nombre de equipo:</label>
        <input type="text" id="nombreEquipoIzquierda" name="nombreEquipoIzquierda" required>

        <label for="horaPartidoIzquierda">Hora:</label>
        <select id="horaPartidoIzquierda" name="horaPartidoIzquierda" required>
          <!-- Aquí puedes generar dinámicamente las opciones de hora -->
          <option value="18:00">18:00</option>
          <option value="19:00">19:00</option>
          <!-- Agrega más opciones según sea necesario -->
        </select>

        <label for="canchaIzquierda">Cancha (Opcional):</label>
        <input type="text" id="canchaIzquierda" name="canchaIzquierda">

        <label for="imagenIzquierda">Adjuntar imagen:</label>
        <input type="file" id="imagenIzquierda" name="imagenIzquierda">

        <button type="submit">Guardar Equipo</button>
      </form>
    </div>

    <div id="formContainerDerecha">
      <form id="equipoFormDerecha">
        <label for="nombreEquipoDerecha">Nombre de equipo:</label>
        <input type="text" id="nombreEquipoDerecha" name="nombreEquipoDerecha" required>

        <label for="horaPartidoDerecha">Hora:</label>
        <select id="horaPartidoDerecha" name="horaPartidoDerecha" required>
          <!-- Aquí puedes generar dinámicamente las opciones de hora -->
          <option value="18:00">18:00</option>
          <option value="19:00">19:00</option>
          <!-- Agrega más opciones según sea necesario -->
        </select>

        <label for="canchaDerecha">Cancha (Opcional):</label>
        <input type="text" id="canchaDerecha" name="canchaDerecha">

        <label for="imagenDerecha">Adjuntar imagen:</label>
        <input type="file" id="imagenDerecha" name="imagenDerecha">

        <button type="submit">Guardar Equipo</button>
      </form>
    </div>

    <div id="resultadosContainerIzquierda">
      <!-- Aquí se mostrarán los resultados después de enviar el formulario Izquierda -->
    </div>

    <div id="resultadosContainerDerecha">
      <!-- Aquí se mostrarán los resultados después de enviar el formulario Derecha -->
    </div>
    <button id="concretarAmistosoBtn" class="enabled">Concretar Amistoso</button>
    <div id="mensajeExito">Partido Amistoso registrado con éxito</div>
  </div>
  <div id="amistososRegistrados">
    <h2>Amistosos Registrados</h2>
    <table id="tablaAmistosos">
      <thead>
        <tr>
          <th>#</th>
          <th>Equipo 1</th>
          <th>Equipo 2</th>
          <th>Hora</th>
          <th>Cancha</th>
          <th>Imagen</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí puedes agregar dinámicamente las filas de la tabla según los amistosos registrados -->
        <tr>
          <td>1</td>
          <td>Nombre Equipo 1</td>
          <td>Nombre Equipo 2</td>
          <td>18:00</td>
          <td>Cancha 1</td>
          <td>Imagen 1</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Nombre Equipo 3</td>
          <td>Nombre Equipo 4</td>
          <td>19:00</td>
          <td>Cancha 2</td>
          <td>Imagen 2</td>
        </tr>
        <!-- Agrega más filas según sea necesario -->
      </tbody>
    </table>
  </div>


  <script>
    document.getElementById('agregarEquipoIzquierda').addEventListener('click', function () {
      document.getElementById('formContainerIzquierda').style.display = 'flex';
      document.getElementById('formContainerDerecha').style.display = 'none';
    });

    document.getElementById('agregarEquipoDerecha').addEventListener('click', function () {
      document.getElementById('formContainerDerecha').style.display = 'flex';
      document.getElementById('formContainerIzquierda').style.display = 'none';
    });
    function actualizarBotonConcretar() {
    var botonConcretar = document.getElementById('concretarAmistosoBtn');
    var mensajeExito = document.getElementById('mensajeExito');

    if (equiposRegistradosDerecha === 2) {
      botonConcretar.classList.add('enabled');
    } else {
      botonConcretar.classList.remove('enabled');
    }

    mensajeExito.style.display = 'none'; // Oculta el mensaje de éxito al actualizar el botón
  }

    document.getElementById('equipoFormIzquierda').addEventListener('submit', function (event) {
      event.preventDefault();
      equiposRegistradosDerecha++; // Incrementa la cantidad de equipos registrados
    actualizarBotonConcretar();

      // Obtener valores del formulario Izquierda
      var nombreEquipo = document.getElementById('nombreEquipoIzquierda').value;
      var horaPartido = document.getElementById('horaPartidoIzquierda').value;
      var cancha = document.getElementById('canchaIzquierda').value;
      var imagen = document.getElementById('imagenIzquierda').value;

      // Crear un nuevo contenedor para el equipo resultado Izquierda
      var nuevoEquipoResultado = document.createElement('div');
      nuevoEquipoResultado.className = 'equipoResultado';

      // Mostrar la información del equipo resultado Izquierda
      var infoEquipoResultado = document.createElement('p');
      infoEquipoResultado.innerHTML = 'Nombre: ' + nombreEquipo + '<br>Hora: ' + horaPartido + '<br>Cancha: ' + cancha + '<br>Imagen: ' + imagen;
      nuevoEquipoResultado.appendChild(infoEquipoResultado);

      // Agregar el nuevo equipo resultado al contenedor de resultados Izquierda
      document.getElementById('resultadosContainerIzquierda').appendChild(nuevoEquipoResultado);

      // Limpiar el formulario Izquierda
      document.getElementById('equipoFormIzquierda').reset();

      // Ocultar el formulario Izquierda después de agregar un equipo
      document.getElementById('formContainerIzquierda').style.display = 'none';
    });

    document.getElementById('equipoFormDerecha').addEventListener('submit', function (event) {
      event.preventDefault();
      equiposRegistradosDerecha++; // Incrementa la cantidad de equipos registrados
    actualizarBotonConcretar();

      // Obtener valores del formulario Derecha
      var nombreEquipo = document.getElementById('nombreEquipoDerecha').value;
      var horaPartido = document.getElementById('horaPartidoDerecha').value;
      var cancha = document.getElementById('canchaDerecha').value;
      var imagen = document.getElementById('imagenDerecha').value;

      // Crear un nuevo contenedor para el equipo resultado Derecha
      var nuevoEquipoResultado = document.createElement('div');
      nuevoEquipoResultado.className = 'equipoResultado';

      // Mostrar la información del equipo resultado Derecha
      var infoEquipoResultado = document.createElement('p');
      infoEquipoResultado.innerHTML = 'Nombre: ' + nombreEquipo + '<br>Hora: ' + horaPartido + '<br>Cancha: ' + cancha + '<br>Imagen: ' + imagen;
      nuevoEquipoResultado.appendChild(infoEquipoResultado);

      // Agregar el nuevo equipo resultado al contenedor de resultados Derecha
      document.getElementById('resultadosContainerDerecha').appendChild(nuevoEquipoResultado);

      // Limpiar el formulario Derecha
      document.getElementById('equipoFormDerecha').reset();

      // Ocultar el formulario Derecha después de agregar un equipo
      document.getElementById('formContainerDerecha').style.display = 'none';
    });
    // Puedes agregar funciones o eventos relacionados con el botón aquí
    document.getElementById('concretarAmistosoBtn').addEventListener('click', function () {
        var mensajeExito = document.getElementById('mensajeExito');
    mensajeExito.style.display = 'block'; // Muestra el mensaje de éxito

    // Resto del código para el botón "Concretar Amistoso"
    alert('Partido amistoso registrado con éxito');
    });
  </script>
</body>
</html>
