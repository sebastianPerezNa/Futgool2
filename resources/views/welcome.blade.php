<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Futgool Player</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Agrega este enlace para incluir FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- Enlaces para jQuery y Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

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
            font-family: "Bradley Hand", cursive;
            color: #fff;
            background-color: rgba(0, 128, 0, 0.9);
            text-shadow: 0px 0px 9px #508AD3;
            z-index: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .left-header {
            font-size: 16px;
            margin-top: 10px;
        }

        .center-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .center-header img {
            max-height: 50px;
            margin-left: 20px;
        }

        .header img {
            max-height: 50px;
            margin-right: 70px;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            background-color: #2ecc71;
            width: 100%;
            text-align: center;
            position: relative;
            z-index: 2;
        }

        .nav-links {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
        }

        .nav-links a {
            text-decoration: none;
            color: #fff;
            padding: 10px 20px;
            margin: 0 10px;
            font-size: 18px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .nav-links a:hover {
            background-color: #27ae60;
        }

        .nav-icons {
            display: flex;
            align-items: center;
        }

        .login-icon {
            margin-right: 20px;
            text-decoration: none;
            color: #fff;
        }

        .search-box {
            display: flex;
            align-items: center;
        }

        input {
            padding: 8px;
            margin-right: 5px;
            border: none;
            border-radius: 3px;
        }

        button {
            padding: 8px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .nav-links a,
        .nav-icons a {
            margin-right: 20px;
        }

        .nav-links a:hover,
        .nav-icons a:hover {
            text-decoration: underline;
        }

        .section-container {
            background-color: #3498db;
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

        .team-info {
            display: flex;
            align-items: center;
            background-color: #2ecc71;
            padding: 5px;
            border-radius: 5px;
        }

        .team-count {
            color: #000;
            font-size: 14px;
            margin-right: 10px;
        }

        .tournament-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
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

        .team-count {
            display: block;
            color: #fff;
            font-size: 14px;
            margin-top: 5px;
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

        .table-container {
        margin-top: 20px;
        border-radius: 10px;
        padding: 20px;
        width: calc(50% - 20px); /* Ajusta el valor según sea necesario */
    }


        .tournament-list {
            border: 2px solid #3498db;
            border-radius: 10px;
            padding: 10px;
            background-color: #ecf0f1;
            flex: 1; /* Añadido para ocupar el espacio disponible */
        }



        .tournament-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .content-container {
        background-image: url('assets/bal3.avif');
        background-size: cover;
        background-position: center;
        padding: 20px;
        width: 100%;
        display: flex;
        justify-content: space-around; /* Ajustado para centrar horizontalmente */
        align-items: center;
    }



        .tournament-button {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
        .slider-container {
        display: flex;
        width: 100%;
        height: 100vh;
        overflow-x: scroll

        /* Vamos a añadir esto 👇 */
        scroll-snap-type: x mandatory;
        }

        .slider-container img {
        flex: 0 0 100%;
        width: 100%;
        object-fit: cover;

        /* Vamos a añadir esto 👇 */
        scroll-snap-align: center;
        }
        .container {
    padding: 50px 0;
    }

    .row.align-items-center {
        display: flex;
        align-items: center;
    }

    .col-lg-6 {
        flex: 0 0 50%;
        max-width: 50%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .display-4 {
        font-size: 2.5rem;
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .text-primary {
        color: #3498db;
    }

    .btn-outline-primary {
        color: #3498db;
        border-color: #3498db;
    }

    .btn-outline-primary:hover {
        color: #fff;
        background-color: #3498db;
        border-color: #3498db;
    }
    .about-section {
    background-color: #2ecc71; /* Cambia el color a verde o al que desees */
    color: #fff; /* Puedes cambiar esto al color que desees para el texto */
    border-radius: 0; /* Sin bordes redondeados */
    padding: 20px; /* Ajusta según sea necesario */
    width: 100%; /* Cubrirá el ancho de la página */
}



    </style>
</head>

<body>
    <!-- Mensajes Flash -->


<div id="animated-background"></div>
    <div class="header">

        <div class="center-header">
            <h1>Futgool Player</h1>
            <img src="{{ asset('assets/logo.png') }}" alt="logo">
        </div>
        <div class="center-header">
            <p>"Únete a la nueva comunidad del fútbol"</p>
        </div>
    </div>
    <nav class="navbar">
        <div class="nav-links">
            <a href="#">Inicio</a>
            <a href="#">Acerca de nosotros </a>
            <a href="#">Contacto</a>
        </div>
        <div class="nav-icons">
            <div class="search-box">
                <input type="text" placeholder="Buscar">
                <button><i class="fas fa-search"></i></button>
            </div>
            <a href="#" class="login-icon"><i class="fas fa-user"></i> Iniciar Sesión</a>
        </div>
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
                <img src="{{ asset('assets/uch.jpg') }}" alt="real.jpg" style="max-width: 100%; height: auto;">
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
        <!-- About Start -->
<!-- About Start -->
<div class="container-fluid about-section" style="background-color: #2ecc71; color: #fff; padding: 20px;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="{{ asset('assets/logo.png') }}" alt="real.jpg">
            </div>
            <div class="col-lg-6">
                <h2 class="display-4 font-weight-bold mb-4">Nueva comunidad de futbol</h2>
                <p>Futgool tiene como objetivo construir una comunidad donde se puedan desarrollar cualquier actividad del mundo del futbol.</p>
                <div class="row py-2">
                    <div class="col-sm-6">
                        <i class="flaticon-barbell display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Monitoreo de jugadores, equipos y campeonatos </h4>
                        <p>Futgool será capaz de monitorear estadísticas y resultados.</p>
                    </div>
                    <div class="col-sm-6">
                        <i class="flaticon-medal display-2 text-primary"></i>
                        <h4 class="font-weight-bold">Un espacio para el futbol</h4>
                        <p>En Futgool se podrá crear campeonatos, generar amistosos y ligas.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Modal de Registro -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registroModalLabel">Formulario de Registro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-success alert-dismissible fade" role="alert" id="registroExitoso" style="display:none; background-color: blue;">
                    Registro exitoso. ¡Bienvenido!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('registro.store') }}" method="post" id="registroForm">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Ingrese su apellido" required>
                    </div>
                    <div class="form-group">
                        <label for="posicion">Posición:</label>
                        <input type="text" class="form-control" name="posicion" id="posicion" placeholder="Ingrese su posición" required>
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad:</label>
                        <input type="number" class="form-control" name="edad" id="edad" placeholder="Ingrese su edad" required>
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnRegistrarse">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var registroForm = document.getElementById('registroForm');
        var registroExitoso = document.getElementById('registroExitoso');

        registroForm.addEventListener('submit', function (event) {
            event.preventDefault();

            // Aquí podrías agregar lógica adicional si es necesario antes de enviar el formulario

            // Simular el registro exitoso
            registroExitoso.style.display = 'block';

            // Aquí podrías hacer una llamada AJAX para enviar los datos al servidor y guardarlos en la base de datos

            // O puedes redirigir al usuario a otra página después del registro
            // window.location.href = '/pagina-de-bienvenida';
        });
    });
</script>


    <div class="content-container">
        <div class="table-container">
            <h2 style="color: #fff; background-color: #2ecc71; margin-bottom: 10px; font-weight: bold; padding: 10px; border-radius: 5px;">Tabla de Posiciones Torneo SJ</h2>
            <table class="table table-striped" style="background-color: #ecf0f1; border-radius: 10px;">
                    <!-- Contenido de la tabla de posiciones... -->
                <!-- Contenido de la tabla de posiciones... -->
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
        <div class="tournament-list" >

            <h2 style="color: #fff; background-color: #2ecc71;; margin-bottom: 10px; font-weight: bold; padding: 10px; border-radius: 5px;">Torneos Disponibles</h2>

            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <div class="team-info">
                    <span class="team-count">(0 equipos inscritos)</span>
                    <button class="tournament-button">Inscripcion</button>
                </div>
            </div>

            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <div class="team-info">
                    <span class="team-count">(0 equipos inscritos)</span>
                    <button class="tournament-button">Inscripcion</button>
                </div>
            </div>
            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <div class="team-info">
                    <span class="team-count">(0 equipos inscritos)</span>
                    <button class="tournament-button">Inscripcion</button>
                </div>
            </div>
            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <div class="team-info">
                    <span class="team-count">(0 equipos inscritos)</span>
                    <button class="tournament-button">Inscripcion</button>
                </div>
            </div>
            <div class="tournament-item">
                <span>Copa Santiago Amateur</span>
                <div class="team-info">
                    <span class="team-count">(0 equipos inscritos)</span>
                    <button class="tournament-button">Inscripcion</button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Carrusel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%; background-color: #3498db; padding: 20px;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('assets/bar.jpg') }}" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/inis.jpg') }}" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('assets/fuf.jpg') }}" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>




    <script>
        // Ejemplo de script para contar equipos inscritos en cada torneo
        document.addEventListener('DOMContentLoaded', function () {
            // Asigna a cada botón de inscripción una función para incrementar el contador
            var buttons = document.querySelectorAll('.tournament-button');
            buttons.forEach(function (button) {
                button.addEventListener('click', function () {
                    // Encuentra el contenedor del torneo y su contador asociado
                    var tournamentContainer = button.closest('.tournament-item');
                    var teamCountElement = tournamentContainer.querySelector('.team-count');

                    // Incrementa el contador y actualiza el texto
                    var currentCount = parseInt(teamCountElement.textContent, 10);
                    teamCountElement.textContent = (currentCount + 1) + ' equipos inscritos';
                });
            });
        });
    </script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>




</body>

</html>
