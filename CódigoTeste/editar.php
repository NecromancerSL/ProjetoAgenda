<?php
    include "db.php";
    $agendaTitulo=$_POST["agendaTitulo"];
    $agendaCor=$_POST["agendaCor"];
    $agendaInicial=$_POST["agendaInicial"];
    $agendaFinal=$_POST["agendaFinal"];


    $query="UPDATE agendamento set title = '$agendaTitulo', color = '$agendaCor', start='$agendaInicial', end='$agendaFinal' where id=$id";
    if ($conexao->query($query) === TRUE) {
        header("location: agendamentos.php");
    } else {
        echo "Error";
    }
    mysqli_close($conexao);
?>