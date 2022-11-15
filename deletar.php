<?php
    include "db.php";
    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
    $deletar="delete from agendamento where id=$id";
    if ($conexao->query($deletar) === TRUE) {
        header("location: agendamentos.php");
    } else {
        echo "Error";
    } 
    mysqli_close($conexao);
?>