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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Perfil</title>
</head>

<body>
    <a name="topo">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
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
                        <a class=" btn btn-danger" href="logout.php?token=">Sair <span
                                class="sr-only"></span></a>
                    </li>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-5">
                    <h1 class="titulo" id="texto">Perfil</h1>
                    <?php
                    include "db.php";
                    $usuID=$_SESSION["ID"];
                    $query="select * from usuario where usuarioID=" . $usuID;
                    $consulta = mysqli_query($conexao, $query);        
                    $resultado=mysqli_fetch_assoc($consulta);        
                    mysqli_close($conexao);           
                    $email = $resultado['usuarioEmail'];
                    $nome = $resultado['usuarioNome'];
                    $dataNascimento = $resultado['usuarioDataNascimento'];
                ?>
                    <div class="d-flex flex-column align-items-center" id="imgperfil">
                        <img class="rounded-circle m-4"width="30%"height="30%" src="
                            <?php 
                                if(file_exists("imagens/perfil/imagem_user$usuID.png")){
                                    echo "imagens/perfil/imagem_user$usuID.png";
                                }else{
                                    echo "imagens/perfil/imagem_userDefault.png";
                                }
                            ?>
                        ">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                    </div>
                    <div class="mb-3">
                        <label class="labels">Nome</label>
                        <input type="text" class="form-control" value="<?php echo $nome?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="labels">E-mail</label>
                        <input type="text" class="form-control" value="<?php echo $email?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label class="labels">Data de Nascimento</label>
                        <input type="email" class="form-control"value="<?php echo date('d/m/Y', strtotime($dataNascimento))?>" disabled>
                    </div>
                        <a href="perfil_formulario.php" class="btn btn-dark botao">Editar perfil</a>
                        <div class="my-1">
                            <a style="float: right;padding-right:20%" class="link-danger" href="deletar_conta">Deletar conta</a>
                            <a style="float: left;padding-left:20%" href="mudar_senha.php">Mudar senha</a>
                            </div>
                        </div>

                            <?php 
                                $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                                $acerto = filter_input(INPUT_GET,"acerto",FILTER_SANITIZE_NUMBER_INT);
                            if($erro==1){
                                echo "<h6 class='alerta' id='alerta'>Erro</h6>";
                            }if($acerto==1){
                                echo "<h6 class='alerta2' id='alerta2'>Senha Alterada com sucesso</h6>";
                            }else if($acerto==2){
                                echo "<h6 class='alerta2' id='alerta2'>Perfil Alterada com sucesso</h6>";
                            }
                            ?>
                    </div>
                </div>
            </div>
        </div>

        <footer class="bg-dark text-center text-white ">
            <!-- Grid container -->
            <div class="container-fluid p-3">
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
                <section >
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
        <script src="js/main.js"></script>
    </body>

</html>