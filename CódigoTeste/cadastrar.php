<?php
include "db.php";

$email=$_POST["email"];
$senha=$_POST["senha"];
$nome=$_POST["nome"];
$dataNascimento=$_POST["dataNascimento"];

$query="insert into usuario(usuarioEmail,usuarioSenha,usuarioNome,usuarioDataNascimento) values('$email','$senha','$nome','$dataNascimento')";

if ($conexao->query($query) === TRUE) {
    header("location: login.php");
} else {
    echo "Error";
}

mysqli_close($conexao);


?>