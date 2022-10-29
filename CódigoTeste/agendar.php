<?php
include "db.php";


session_start();
$_SESSION["ID"];

$agendaTitulo=$_POST["agedaTitulo"];
$agendaDescricao=$_POST["agendaDescricao"];
$agendaData=$_POST["agendaData"];
// agendamentoTitulo agendamentoDescricao agendamnetoData usuarioID

$query="insert into agendamento(agendamentoTitulo,agendamentoDescricao,agendamnetoData,usuarioID) values('$email','$senha','$nome','$dataNascimento')";

?>