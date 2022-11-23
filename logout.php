<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Logout</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-auto background p-4">
                    <h1 class="titulo" id="texto">Tem certeza que deseja sair?</h1>
                    <div class="text-center">
                        <img class="h-50 w-50" src="imagens/logout/chorar.gif" alt="emote de choro">
                    </div>
                    <div class="text-center">
                        
                        <?php
                            include "verificar.php";
                            $token = md5(session_id());
                            if(isset($_GET['token']) && $_GET['token'] === $token) {
                                session_start();
                                $token = md5(session_id());
                                session_destroy();
                                header("location: index.php");
                                exit();
                            }else {
                                echo "<a href='logout.php?token=".$token."'> <button class='btn btn-dark'>Sair </button></a> ";
                                echo "<button class='btn btn-danger' onclick='window.history.back()'>Cancelar </button>";      
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


