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
/* Estilos para el formulario emergente */
.modal-container {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    justify-content: center;
    align-items: center;
}

.modal-content {
    background-color: #fff;
    padding: 20px;
    border-radius: 10px;
    position: relative;
    width: 300px;
}

.close-button {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 20px;
    cursor: pointer;
}
.success-message {
            display: none;
            background-color: #2ecc71;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
            text-align: center;
        }





    </style>
</head>

<body>



<div id="animated-background"></div>
    <div class="header">

        <div class="center-header">
            <h1>Futgool Player</h1>
            <img src="<?php echo e(asset('assets/logo.png')); ?>" alt="logo">
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
        <a href="<?php echo e(route('registrousuario')); ?>" class="register-icon">
            <i class="fas fa-clipboard"></i> Registro
        </a>

            <a href="#" class="login-icon"><i class="fas fa-user"></i> Inicio de Sesión</a>
        </div>
    </nav>



    <!-- Secciones -->
    <div class="section-container">
        <div class="sections-container">
            <!-- Sección 1 -->
            <div class="section">
                <div class="section-title">Inscripción de Jugadores</div>
                <img src="<?php echo e(asset('assets/ron2.jpg')); ?>" alt="ron2.jpg">
                <p class="section-description">Inscríbete como jugador para unirte a clubes o revisar tus estadísticas</p>
                <a href="<?php echo e(route('registrojugador')); ?>" class="btn btn-primary">Registro de Jugador</a>
            </div>

          <!-- Sección 2 -->
        <div class="section">
            <div class="section-title">Inscripción de Equipos</div>
            <img src="<?php echo e(asset('assets/uch.jpg')); ?>" alt="real.jpg" style="max-width: 100%; height: auto;">
            <p class="section-description">Inscribe a tu equipo para enfrentar a los mejores rivales</p>

            <!-- Agrega el atributo onclick para redirigir al usuario -->
            <a href="<?php echo e(route('registroequipos')); ?>" class="btn btn-primary">Registro de Equipo</a>        </div>

            <!-- Nueva Sección -->
            <div class="section">
                <div class="section-title">Partido Amistoso</div>
                <img src="<?php echo e(asset('assets/naz1.jpg')); ?>" alt="naz1.jpg">
                <p class="section-description">Enfrentate a cualquier rival</p>
                <a href="<?php echo e(route('amistoso')); ?>" class="btn btn-primary">Crear Partido</a>
            </div>
        </div>
    </div>
        <!-- About Start -->
<!-- About Start -->
<div class="container-fluid about-section" style="background-color: #2ecc71; color: #fff; padding: 20px;">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img class="img-fluid mb-4 mb-lg-0" src="<?php echo e(asset('assets/logo.png')); ?>" alt="real.jpg">
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

<!-- Formulario emergente -->
<div id="modal-container" class="modal-container">
    <div class="modal-content">
        <span class="close-button" onclick="closeModal()">&times;</span>
        <h2>Formulario de Inscripción</h2>
        <form id="inscriptionForm" onsubmit="submitForm('Copa Santiago Amateur')">
            <label for="teamName">Nombre de equipo:</label>
            <input type="text" id="teamName" name="teamName" required>

            <label for="captain">Capitán:</label>
            <input type="text" id="captain" name="captain" required>

            <label for="logo">Escudo:</label>
            <input type="file" id="logo" name="logo" accept="image/*">

            <button type="submit">Inscribir Equipo</button>
        </form>
    </div>
</div>

<!-- Mensaje de registro exitoso -->
<div id="successMessage" class="success-message">
    Registro exitoso
</div>


<!-- Carrusel -->
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="width: 100%; background-color: #3498db; padding: 20px;">
<div class="section-title">Galeria</div>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?php echo e(asset('assets/bar.jpg')); ?>" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 1">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('assets/inis.jpg')); ?>" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 2">
        </div>
        <div class="carousel-item">
            <img src="<?php echo e(asset('assets/fuf.jpg')); ?>" class="d-block w-100 img-fluid" style="height: 400px; object-fit: cover;" alt="Slide 3">
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
    function openModal(tournamentName) {
        document.getElementById('modal-container').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modal-container').style.display = 'none';
    }

    function submitForm(tournamentName) {
        // Aquí puedes agregar la lógica para enviar el formulario (por ejemplo, usando AJAX)

        // Después de enviar el formulario, cierra el modal y muestra el mensaje de éxito
        closeModal();
        showSuccessMessage();

        // Actualiza el contador del torneo
        updateTeamCount(tournamentName);

        // También puedes agregar lógica adicional aquí, por ejemplo, mostrar un mensaje de éxito.
        // alert('Formulario enviado con éxito');
    }

    function showSuccessMessage() {
        var successMessage = document.getElementById('successMessage');
        successMessage.style.display = 'block';

        // Oculta el mensaje después de unos segundos (por ejemplo, 3 segundos)
        setTimeout(function () {
            successMessage.style.display = 'none';
        }, 3000);
    }

    function updateTeamCount(tournamentName) {
        var tournamentItem = document.querySelector(`.tournament-item span:contains(${tournamentName})`);
        var teamCountElement = tournamentItem.closest('.tournament-item').querySelector('.team-count');

        // Incrementa el contador y actualiza el texto
        var currentCount = parseInt(teamCountElement.textContent, 10);
        teamCountElement.textContent = (currentCount + 1) + ' equipos inscritos';
    }

    // Función de selección personalizada para encontrar el elemento que contiene un texto específico
    jQuery.expr[':'].contains = function (a, i, m) {
        return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
</script>
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
        crossorigin="anonymous"></script>




</body>

</html>
<?php /**PATH C:\laragon\www\Futgool2\resources\views/welcome.blade.php ENDPATH**/ ?>