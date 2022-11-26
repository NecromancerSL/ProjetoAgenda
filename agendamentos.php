<!DOCTYPE html>
<html lang="pt-br">
<?php include "verificar.php";?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8b69b9518f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/estilo.css">

    <title>Agendamentos</title>
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
                <h1 class="titulo" id="texto">Agendamentos</h1>
                <div class="mb-3">
                    <table style='text-align: center;' class='table table-active'>
                        <tr class='table-secondary'>
                            <th> Título </th>
                            <th> Cor </th>
                            <th> Situação </th>
                            <th> Data Inicial </th>
                            <th> Data Final </th>
                            <th> Ação</th>
                        <tr>

                            <?php
            include "db.php";
            $usuID = $_SESSION["ID"];
            $query = "select id,title,color,start,end from agendamento where usuarioID=" . $usuID;

            $total_reg = "4";
            $pagina=$_GET['pagina'];
            if (!$pagina) {
            $pc = "1";
            } else {
            $pc = $pagina;
            }
            $inicio = $pc - 1;
            $inicio = $inicio * $total_reg;
            $limite = mysqli_query($conexao,"$query ORDER BY end DESC LIMIT $inicio,$total_reg");
            $todos = mysqli_query($conexao,"$query");
            $tr = mysqli_num_rows($todos);
            $tp = $tr / $total_reg;
            
            $resultado = mysqli_query($conexao, $query);
            while ($rows = mysqli_fetch_array($limite)) {
                $id= $rows['id'];
                $title = $rows['title'];
                $color = $rows['color'];
                $start = $rows['start'];
                $end = $rows['end'];
              
              
                echo "<tr><td>$title</td> <td style='background-color:$color';></td> ";
                switch ($color){
                    case "red":echo "<td>Urgente</td>";break;
                    case "yellow":echo "<td>Importante</td>";break;
                    case "green":echo "<td>Desejável</td>";break;
                    case "blue":echo "<td>Descartável</td>";break;
                }
                echo "<td>".date('d/m/Y H:i', strtotime($start))."</td> <td>".date('d/m/Y H:i', strtotime($end))."</td>";
                echo "<td><a href='agendamento_formulario_editar.php?id=$id'class='btn btn-info mx-1'>Editar</a>"."<a href='deletar.php?id=$id&token=.md5(session_id()).'"."class='btn btn-danger mx-1'>Apagar</a></td></tr>";
            }
            
            mysqli_close($conexao);
            ?>

                    </table>
                </div>
                <h6 class="alerta" id="alerta">
                    <?php $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                        if($erro==1){
                            echo "Ocorreu um erro";
                        }?>
                </h6>
                <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-center">
                        <?php
                            $anterior = $pc -1;
                            $proximo = $pc +1;
                            

                            if ($pc>1) {
                                echo " <li class='page-item'><a class='page-link' href='?pagina=$anterior'>Anterior</a></li>";
                            }else{
                                echo " <li class='page-item disabled'><a class='page-link'>Anterior</a></li>";
                            }

                            for($i = 1; $i < $tp + 1; $i++){
                                if($i!=$pc){
                                    echo "<li class='page-item'><a  class='page-link' href='?pagina=$i'>$i</a></li>";
                                }else{
                                    echo "<li class='page-item'><a  class='page-link' href='?pagina=$i'>$i</a></li>";
                                }
                                
                            }


                            if ($pc<$tp) {
                                echo " <li class='page-item'><a class='page-link' href='?pagina=$proximo'>Próximo</a></li>";
                            }else{
                                echo " <li class='page-item disabled'><a class='page-link'>Próximo</a></li>";
                            }
                        ?>
                    </ul>
                </nav>
                
                <div class="mb-3">
                    <a href="agendamento_formulario.php">
                        <button type="button" class="btn btn-dark botao">Agendar</button>
                    </a>
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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
        </script>

</body>

</html>