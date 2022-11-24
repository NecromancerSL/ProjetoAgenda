<!DOCTYPE html>
<html lang="pt-br">
    <?php
        include "verificar.php";
        include "db.php";
        $token = md5(session_id());
        $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
        $query = "select title from agendamento where id=".$id;
        $resultado = mysqli_query($conexao, $query);
        $row_agendamento=mysqli_fetch_assoc($resultado);
        $titulo= $row_agendamento['title'];
    ?>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        <title>Deletar Agendamento</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center align-items-center vh-100">
                <div class="col-auto background p-4">
                    <h1 class="titulo" id="texto">Tem certeza que deseja excluir "<span style="color: #f00;"><?php echo $titulo?></span>"?</h1>
                    <div class="text-center">
                        <?php                            
                            if(isset($_GET['token']) && $_GET['token'] === $token) {
                                $deletar="delete from agendamento where id=$id";
                                if ($conexao->query($deletar) === TRUE) {
                                    header("location: agendamentos.php?pagina=1");
                                } else {
                                    header("location: agendamentos.php?erro=1");
                                } 
                                mysqli_close($conexao);
                                exit();
                            }else {
                                echo "<a href='deletar.php?id=$id&token=".$token."'><button class='btn btn-dark'>Excluir</button></a> ";
                                echo "<button class='btn btn-danger' onclick='window.history.back()'>Cancelar </button>";      
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
