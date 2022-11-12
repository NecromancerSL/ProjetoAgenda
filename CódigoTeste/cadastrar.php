<?php
include "db.php";

$email=$_POST["email"];
$senha=md5($_POST["senha"]);
$nome=$_POST["nome"];
$dataNascimento=$_POST["dataNascimento"];
$data = explode( '/',$dataNascimento);
if(var_dump( checkdate($data[1], $data[0], $data[2]) )){
    header("location: cadastro_formulario?erro.php");
}
$query="insert into usuario(usuarioEmail,usuarioSenha,usuarioNome,usuarioDataNascimento) values('$email','$senha','$nome','$dataNascimento')";

if ($conexao->query($query) === TRUE) {
    header("location: index");
} else {
    header("location: cadastro_formulario?erro=1");
}
mysqli_close($conexao);
?>