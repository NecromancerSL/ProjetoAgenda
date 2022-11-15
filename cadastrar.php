<?php
include "db.php";

$email=$_POST["email"];
$senha=md5($_POST["senha"]);
$nome=$_POST["nome"];
$dataNascimento=$_POST["dataNascimento"];

$query="insert into usuario(usuarioEmail,usuarioSenha,usuarioNome,usuarioDataNascimento) values('$email','$senha','$nome','$dataNascimento')";

if ($conexao->query($query) === TRUE) {
    header("location: index.php");
} else {
    header("location: cadastro_formulario?erro=1");
}
mysqli_close($conexao);
?>