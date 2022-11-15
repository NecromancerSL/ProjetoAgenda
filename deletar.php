<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<?php
    include "verificar.php";
    include "db.php";
    $token = md5(session_id());
    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

    
    if(isset($_GET['token']) && $_GET['token'] === $token) {
        $deletar="delete from agendamento where id=$id";
        if ($conexao->query($deletar) === TRUE) {
            header("location: agendamentos.php");
        } else {
            header("location: agendamentos.php?erro=1");
        } 
        mysqli_close($conexao);
        exit();
    }else {
        echo "<h1>Tem certeza que deseja excluir?</h1>";
        echo "<a href='deletar.php?id=$id&token=".$token."'><button class='btn btn-dark'>Excluir</button></a> ";
        echo "<button class='btn btn-danger' onclick='window.history.back()'>Cancelar </button>";      
    }
    
?>