<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b69b9518f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">

    <title>Home</title>
</head>

<body>
    <a name="topo">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="perfil.php">Olá,
                    <?php session_start();  echo strtok($_SESSION["nomeusuario"], " ");?></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="">Agendamentos <span class="sr-only"></span></a>
                        </li>
                    </ul>
                    <li class="nav-item active">
                        <a class=" btn btn-danger" href="index.php">Sair <span class="sr-only"></span></a>
                    </li>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <h1 class="titulo" id="texto">Agendamentos</h1>
                <div class="mb-3">
                    <table style='text-align: center;' class='table table-active'>
                        <tr class='table-secondary'>
                            <th> Titulo </th>
                            <th> Cor </th>
                            <th> Data Inicial </th>
                            <th> Data Final </th>
                            <th> Ação</th>
                        <tr>

                            <?php
            include "db.php";
            $usuID = $_SESSION["ID"];
            $query_envents = "select id,title,color,start,end from agendamento where usuarioID=" . $usuID;
            $resultado = mysqli_query($conexao, $query_envents);
            while ($row_events = $resultado->fetch_array()) {
              $id= $row_events['id'];
              $title = $row_events['title'];
              $color = $row_events['color'];
              $start = $row_events['start'];
              $end = $row_events['end'];
              
              
              echo "<tr><td>$title</td> <td style='background-color:$color ;'></td> <td>".date('d/m/Y H:i', strtotime($start))."</td> <td>".date('d/m/Y H:i', strtotime($end))."</td>";
              echo "<td><a href='agendamento_formulario_editar.php?id=$id'class='btn btn-primary'>Editar</a><a href='deletar.php?id=$id'class='btn btn-danger'>Apagar</a></td></tr>";
            }
            
            mysqli_close($conexao);
            ?>

                    </table>
                </div>
                <div class="mb-3">
                    <a href="agendamento_formulario.php">
                        <button type="button" class="btn btn-success botao">Agendar</button>
                    </a>
                </div>
            </div>
        </div>

        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Facebook -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-facebook-f"></i></a>

                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>

                    <!-- Google -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-google"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-instagram"></i></a>
                    <!-- Linkedin -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-linkedin-in"></i></a>

                    <!-- Github -->
                    <a class="btn btn-outline-light btn-floating m-1" target="_blank" href="https://github.com/NecromancerSL/ProjetoAgenda" role="button"><i
                            class="fab fa-github"></i></a>
                </section>
                <section class="mb-4">
                    <p>
                        Site criado como projeto de faculdade
                    </p>
                </section>
                <section class="">
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
                © 2022 Copyright: <a class="text-white" href="#">Grupo 2</a>
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>