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

    <title>Editar</title>
</head>

<body>
    <a name="topo">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand"
                    href=""><?php echo strtok($_SESSION["nomeusuario"]);?></a>
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
                            <a class="nav-link" href="agendamentos.php">Agendamentos <span class="sr-only"></span></a>
                        </li>
                    </ul>
                    <li class="nav-item active">
                        <a class=" btn btn-danger" href="logout.php?token='.md5(session_id()).'">Sair <span class="sr-only"></span></a>
                    </li>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-5 background">
                    <h1 class="titulo" id="texto">Perfil</h1>
                    <?php
                    include "db.php";
                    $usuID=$_SESSION["ID"];
                    $query="select * from usuario where usuarioID=" . $usuID;
                    $consulta = mysqli_query($conexao, $query);        
                    $resultado=mysqli_fetch_assoc($consulta);        
                                       
                    $email = $resultado['usuarioEmail'];
                    $nome = $resultado['usuarioNome'];
                    $dataNascimento = $resultado['usuarioDataNascimento'];
                    mysqli_close($conexao); 
                    echo "<form method='post' action='editar.php?id=$usuID' enctype='multipart/form-data'>";
                ?>
                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome</label>
                        <input type="text" class="form-control inputvalor" id="nome" value="<?php echo $nome ?>"
                            name="nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">E-mail</label>
                        <input type="email" class="form-control inputvalor" value="<?php echo $email ?>" name="email"
                            id="email" placeholder="Digite a data inicial" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data de Nascimento</label>
                        <input type="date" min='1900-12-31' max='9999-12-31' class="form-control inputvalor" value="<?php echo $dataNascimento ?>"
                            name="dataNascimento" id="dataNascimento" required>
                    </div>
                    <div class="mb-3">
                        <label for="conteudo">Enviar imagem para perfil:</label>
                        <input type="file" name="imagem" accept="image/*">
                    </div>

                    <div class="mb-3">
                        <input type='submit' name='editar_perfil' class='btn btn-dark botao' value='Editar perfil' />
                    </div>
                    <div class="mb-3">
                        <a href="perfil.php" class="btn btn-danger botao">Cancelar</a>
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
                    <a class="btn btn-outline-light btn-floating m-1"target="_blank" href="https://github.com/NecromancerSL/ProjetoAgenda" role="button"><i
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
        <script src="js/cadastro.js"></script>

</body>

</html>