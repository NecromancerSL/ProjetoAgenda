<!DOCTYPE html>
<html lang="pt-br">
<?php include "verificar.php";?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/icones/favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b69b9518f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">

    <title>Agendar</title>
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

                <div class="col-auto background">

                    <h1 class="titulo" id="texto">Adi????o de Agendamentos</h1>

                    <form method="post" action="agendar.php">

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Titulo</label>
                            <input type="text" class="form-control inputvalor" id="titulo" name="agendaTitulo"
                                placeholder="Digite o titulo" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Cor</label>
                            <select class="form-select" aria-label="Default select example" name="agendaCor" id="cor">
                                <option value="red" selected>Vermelho (Urgente)</option>
                                <option value="yellow">Amarelo (Importante)</option>
                                <option value="green">Verde (Desej??vel)</option>
                                <option value="blue">Azul (Descart??vel)</option>
                                
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Data de In??cio</label>
                            <input type="datetime-local" min='1900-12-31' max='9999-12-31' class="form-control inputvalor" name="agendaInicial"
                                id="inicial" placeholder="Digite a data inicial" required>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Data de Termino</label>
                            <input type="datetime-local" min='1900-12-31' max='9999-12-31' class="form-control inputvalor" name="agendaFinal" id="final"
                                placeholder="Digite a data final" required>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-dark botao" id="btnacessar">Agendar</button>
                        </div>
                        <div class="mb-3">
                            <a href="agendamentos.php?pagina=1" class="btn btn-danger botao">Cancelar</a>
                        </div>
                        <?php 
                                $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                                $acerto = filter_input(INPUT_GET,"acerto",FILTER_SANITIZE_NUMBER_INT);
                            if($erro==1){
                                echo "<h6 class='alerta' id='alerta'>Data inicial maior que a data final</h6>";
                            }
                        ?>

                    </form>
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
                ?? 2022 Copyright: <a class="text-white" href="sobrenos.php">Grupo 2</a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>