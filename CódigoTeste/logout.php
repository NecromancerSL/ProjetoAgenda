<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

