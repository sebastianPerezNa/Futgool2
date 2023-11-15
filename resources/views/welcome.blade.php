<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futgool Player</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        #animated-background {
            position: fixed;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, #3498db, #8e44ad, #3498db, #8e44ad);
            background-size: 400% 400%;
            animation: gradient 15s infinite;
            z-index: -1;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .header {
            width: 100%;
            padding: 20px;
            text-align: center;
            font-family: Arial;
            font-size: 30px;
            color: #fff;
            background-color: rgba(0, 128, 0, 0.9);
            text-shadow: 0px 0px 9px #508AD3;
            z-index: 1;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .header img {
            max-height: 40px;
            margin-right: 10px;
        }

        /* Barra de Navegación */
        nav {
            background-color: #2ecc71;
            padding: 10px 0;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #27ae60;
        }

        .section-container {
            background-color: #3498db; /* Cambia este color según tu diseño */
            padding: 20px;
            width: 100%;
        }

        .sections-container {
            display: flex;
            justify-content: space-around;
            width: 100%;
            margin-top: 20px;
        }

        .section {
            width: 350px;
            height: 350px;
            margin: 10px;
            padding: 20px;
            border: 2px solid #1278BF;
            border-radius: 10px;
            background: linear-gradient(45deg, #87CEEB, #00BFFF, #87CEEB, #00BFFF);
            color: #000;
            text-align: center;
            overflow: hidden;
            position: relative;
            margin-bottom: 20px;
        }

        .section img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .section-title {
            font-family: 'Arial', sans-serif;
            font-size: 24px;
            color: #fff;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .section-description {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #fff;
            margin-bottom: 10px;
        }

        .section button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .section button:hover {
            background-color: #45a049;
        }
        .content-container {
            display: flex;
            margin-top: 20px;
            align-items: flex-start;
            margin-left: 20px;
            background: url('{{ asset('assets/uch.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            flex: 1;
        }




            .table-container {
        /* Elimina el fondo aquí */
        margin-top: 20px;
        margin-left: 20px;
        border-radius: 10px;
        padding: 20px;
    }

    .tournament-list {
        /* Elimina el fondo aquí */
        border: 2px solid #3498db;
        border-radius: 10px;
        padding: 10px;
        background-color: #ecf0f1;
    }



        .tournament-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }
        .content-container {
            display: flex;
            margin-top: 20px;
            align-items: flex-start;
            margin-left: 20px;
            background: url('{{ asset('assets/uh.jpg') }}') no-repeat center center fixed;
            background-size: cover;
            flex: 1;
        }


        .tournament-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div id="animated-background"></div>
    <div class="header">
        <img src="{{ asset('assets/logo.png') }}" alt="logo">
        <h1>Futgool Player</h1>
    </div>
    <nav>
        <a href="#">Inicio</a>
        <a href="#">Acerca de</a>
        <a href="#">Contacto</a>
    </nav>


    <!-- Secciones -->
    <div class="section-container">
        <div class="sections-container">
            <!-- Sección 1 -->
            <div class="section">
                <div class="section-title">Inscripción de Jugadores</div>
                <img src="{{ asset('assets/ron2.jpg') }}" alt="ron2.jpg">
                <p class="section-description">Inscríbete como jugador para unirte a clubes o revisar tus estadísticas</p>
                <button class="btn btn-primary" data-toggle="modal" data-target="#registroModal">Inscripcion</button>
            </div>

            <!-- Sección 2 -->
            <div class="section">
                <div class="section-title">Inscripción de Equipos</div>
                <img src="{{ asset('assets/real.jpg') }}" alt="real.jpg" style="max-width: 100%; height: auto;">
                <p class="section-description">Inscribe a tu equipo para enfrentar a los mejores rivales</p>
                <button>Inscripcion</button>
            </div>

            <!-- Nueva Sección -->
            <div class="section">
                <div class="section-title">Revisión de Estadísticas</div>
                <img src="{{ asset('assets/naz1.jpg') }}" alt="naz1.jpg">
                <p class="section-description">Revisa tus estadísticas</p>
                <button>Estadísticas</button>
            </div>
        </div>
    </div>
    <!-- Modal de Registro -->
    <div class="modal fade" id="registroModal" tabindex="-1" role="dialog" aria-labelledby="registroModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registroModalLabel">Formulario de Registro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-success alert-dismissible fade" role="alert" id="registroExitoso"
                        style="display:none;">
                        Registro exitoso
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('registro.store') }}" method="post" id="registroForm">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre"
                                placeholder="Ingrese su nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input type="text" class="form-control" name="apellido" id="apellido"
                                placeholder="Ingrese su apellido">
                        </div>
                        <div class="form-group">
                            <label for="posicion">Posición:</label>
                            <input type="text" class="form-control" name="posicion" id="posicion"
                                placeholder="Ingrese su posición">
                        </div>
                        <div class="form-group">
                            <label for="edad">Edad:</label>
                            <input type="number" class="form-control" name="edad" id="edad"
                                placeholder="Ingrese su edad">
                        </div>
                        <button type="button" class="btn btn-primary" id="btnRegistrarse">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<div class="content-container">
   <div style="display: flex; margin-top: 20px; align-items: flex-start; margin-left: 20px;">
    <div style="flex: 1;">
        <h2 style="color: #fff; background-color: #2ecc71; margin-bottom: 10px; font-weight: bold; padding: 10px; border-radius: 5px;margin-left: -220px;">Tabla de Posiciones Torneo SJ</h2>
        <table class="table table-striped" style="background-color: #ecf0f1; border-radius: 10px; margin-left: -220px;">
                <thead>
                    <tr>
                        <th>Nombre de equipo</th>
                        <th>Puntos</th>
                        <th>G</th>
                        <th>GEC</th>
                        <th>PJ</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos de la tabla de posiciones -->
                    <tr>
                        <td>Atlético Cordillera</td>
                        <td>15</td>
                        <td>20</td>
                        <td>10</td>
                        <td>5</td>
                    </tr>
                    <tr>
                        <td>Unión Andina FC</td>
                        <td>12</td>
                        <td>18</td>
                        <td>15</td>
                        <td>7</td>
                    </tr>
                    <tr>
                        <td>FC Santiago Sur</td>
                        <td>10</td>
                        <td>15</td>
                        <td>12</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Club Metropolitano</td>
                        <td>8</td>
                        <td>12</td>
                        <td>20</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>Sporting Oriente</td>
                        <td>6</td>
                        <td>10</td>
                        <td>18</td>
                        <td>9</td>
                    </tr>
                    <tr>
                        <td>Deportivo Central</td>
                        <td>5</td>
                        <td>8</td>
                        <td>22</td>
                        <td>12</td>
                    </tr>

                    <!-- Fin de datos de ejemplo -->
                </tbody>
            </table>
        </div>

                <!-- Lista de Torneos a la derecha de la tabla de posiciones -->
            <div class="tournament-list" style="margin-left: 220px;">

            <h2 style="color: #fff; background-color: #2ecc71;; margin-bottom: 10px; font-weight: bold; padding: 10px; border-radius: 5px;">Torneos Disponibles</h2>

            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <button class="tournament-button">Inscribirse</button>
            </div>

            <div class="tournament-item">
                <span>Desafío Capitalino</span>
                <button class="tournament-button">Inscripcion</button>
            </div>
            <div class="tournament-item">
                <span>Desafío San Joaquin</span>
                <button class="tournament-button">Inscripcion</button>
            </div>
            <div class="tournament-item">
                <span>Copa Macul</span>
                <button class="tournament-button">Inscripcion</button>
            </div>
            <div class="tournament-item">
                <span>Barrio chileno</span>
                <button class="tournament-button">Inscripcion</button>
            </div>



            </div>
</div>

</body>

</html>
