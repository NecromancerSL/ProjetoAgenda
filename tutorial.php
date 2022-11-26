<!DOCTYPE html>
<html lang="pt-br">
<?php include "verificar.php";?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src='js/fullcalendar/main.js'></script>
        <script src='js/fullcalendar/locales/pt-br.js'></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
        <script src="https://kit.fontawesome.com/8b69b9518f.js" crossorigin="anonymous"></script>
        <link href='css/fullcalendar/main.css' rel='stylesheet' />
        <link rel="stylesheet" href="css/estilo.css">
        <title>Tutorial</title>
    </head>

    <body>
    <a name="topo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="perfil.php"><?php echo strtok($_SESSION["nomeusuario"], " ");?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="agendamentos.php?pagina=1">Agendamentos<span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="tutorial.php">Tutorial<span class="sr-only"></span></a>
                        </li>
                    </ul>
                    <li class="nav-item active">
                        <a class=" btn btn-danger" href="logout.php?token='.md5(session_id()).'">Sair <span
                                class="sr-only"></span></a>
                    </li>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-auto">
                <h1 class="titulo" id="texto">Tutorial</h1>
                <br>
                <div class="mb-3">
                    <video style="margin: 0 auto;width: 900px;"controls="controls">
                        <source src="tutorial/tutorial.mp4" type="video/mp4">
                    </video>
                </div>
                </div>
            </div>
        </div>
       
        <br>
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://twitter.com/grupo2ads" role="button"><i
                            class="fab fa-twitter"></i></a>
                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://www.instagram.com/grupo2_ads/" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1"  href="#" role="button"><i
                            class="fab fa-linkedin-in"></i></a>
                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://github.com/NecromancerSL/ProjetoAgenda" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <section>
                    <div class="row">
                        <div class="mb-4">

                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#topo" class="text-white">Voltar para o Topo</a>
                                </li>
                                <li>
                                    <a href="feedback_formulario.php" class="text-white">Enviar Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Copyright: <a class="text-white" href="sobrenos.php">Grupo 2</a>
            </div>
        </footer>
    </body>
</html>