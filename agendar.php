<?php
include "db.php";

session_start();
$usuID=$_SESSION["ID"];

$agendaTitulo=$_POST["agendaTitulo"];
$agendaCor=$_POST["agendaCor"];
$agendaInicial=$_POST["agendaInicial"];
$agendaFinal=$_POST["agendaFinal"];
// agendamentoTitulo agendamentoDescricao agendamnetoData usuarioID

$query="insert into agendamento(title,color,start,end,usuarioID) values('$agendaTitulo','$agendaCor','$agendaInicial','$agendaFinal',$usuID)";

if(mysqli_query($conexao,$query)){
    header("location: home.php");

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location: cadastro_formulario.php?erro");

}

mysqli_close($conexao);

?>
?>