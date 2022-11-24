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
    
    <title>Editar agendamentos</title>
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
                    <h1 class="titulo" id="texto">Edição da agendamentos</h1>

                    <?php
                    include "db.php";
                    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
                    $query="select title,color,start,end from agendamento where id=" . $id;
                    $resultado = mysqli_query($conexao, $query);
                            
                    $row_events=mysqli_fetch_assoc($resultado);        
                    mysqli_close($conexao);                    
                    $title = $row_events['title'];
                    $color = $row_events['color'];
                    $start = $row_events['start'];
                    $end = $row_events['end'];
                    echo "<form method='post' action='editar.php?id=$id'>";
                ?>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Titulo</label>
                        <input type="text" class="form-control inputvalor" id="titulo" value="<?php echo $title ?>"
                            name="agendaTitulo" placeholder="Digite o titulo" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Cor</label>
                        <select class="form-select" aria-label="Default select example" value="<?php echo $color ?>"
                            name="agendaCor" id="cor">
                            <option value="red " <?=($color == 'red')? 'selected' : ''?>>Vermelho (Urgente)</option>
                            <option value="yellow" <?=($color == 'yellow')? 'selected' : ''?>>Amarelo (Importante)</option>
                            <option value="green" <?=($color == 'green')? 'selected' : ''?>>Verde (Desejável)</option>
                            <option value="blue" <?=($color == 'blue')? 'selected' : ''?>>Azul (Descartável)</option>

                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data de início</label>
                        <input type="datetime-local" min='1900-12-31' max='9999-12-31' class="form-control inputvalor" value="<?php echo $start ?>"
                            name="agendaInicial" id="inicial" placeholder="Digite a data inicial" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data de término</label>
                        <input type="datetime-local"  class="form-control inputvalor" value="<?php echo $end ?>"
                            name="agendaFinal" id="final" placeholder="Digite a data final" required>
                    </div>

                    <div class="mb-3">
                        <input id='$id' type='submit' name='editar' class='btn btn-dark botao' value='Editar' />
                    </div>

                    </form>
                </div>

            </div>

        </div>
        <footer class="bg-dark text-center text-white">
            <!-- Grid container -->
            <div class="container p-4">
                <!-- Section: Social media -->
                <section class="mb-4">
                    <!-- Twitter -->
                    <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i
                            class="fab fa-twitter"></i></a>
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