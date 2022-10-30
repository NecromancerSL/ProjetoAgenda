<?php
include "db.php";

$email=$_POST["email"];
$senha=$_POST["senha"];
$nome=$_POST["nome"];
$dataNascimento=$_POST["dataNascimento"];

$query="insert into usuario(usuarioEmail,usuarioSenha,usuarioNome,usuarioDataNascimento) values('$email','$senha','$nome','$dataNascimento')";

$consulta=mysqli_query($conexao,$query);

if(mysqli_query($conexao,$query)){

    header("location: login.php");

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location: cadastro_formulario.php?erro");
}

mysqli_close($conexao);

?>