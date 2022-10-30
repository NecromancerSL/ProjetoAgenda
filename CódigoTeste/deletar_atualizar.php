<?php
session_start();

include "db.php";

$id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);

if(isset($_POST['deletar'])) {
    $deletar="delete from agendamento where id=$id";
    $consulta=mysqli_query($conexao,$deletar);
}


if(isset($_POST['encaminhar'])) {
    header("location: agendamento_formulario_editar.php?id='$id'");
}

if(isset($_POST['editar'])) {
    $agendaTitulo=$_POST["agendaTitulo"];
    $agendaCor=$_POST["agendaCor"];
    $agendaInicial=$_POST["agendaInicial"];
    $agendaFinal=$_POST["agendaFinal"];

    
    $query="UPDATE agendamento set title = '$agendaTitulo', color = '$agendaCor', start='$agendaInicial', end='$agendaFinal' where id=$id";
    $consulta=mysqli_query($conexao,$query);
    header("location: agendamentos.php");
}


mysqli_close($conexao);
?>
