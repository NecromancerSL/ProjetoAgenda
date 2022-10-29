<?php
//ter conexão com o bd
include "db.php"; //tipo import

$email=$_POST["email"]; //esta vindo de um post
$senha=$_POST["senha"]; //chama a senha pelo post(no form)
$nome=$_POST["nome"];
$dataNascimento=$_POST["dataNascimento"];


//consultar no banco

//$query="INSERT INTO usuario WHERE usu_email='$email' AND usu_senha='$senha' ";

$query="insert into usuario(usuarioEmail,usuarioSenha,usuarioNome,usuarioDataNascimento) values('$email','$senha','$nome','$dataNascimento')";

$consulta=mysqli_query($conexao,$query);//a função executa uma consulta no banco, e para fazer isso precisada conexão e a consulta que quer executar

if(mysqli_query($conexao,$query)){//função que retorna o numero de linhas

    $row = mysqli_fetch_array($consulta);//traz um array de valores da consulta

    header("location: cadastro.php");//função de direcionamento

}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("location: cadastro.php?erro");//?= passa um paramentro

}

mysqli_close($conexao);

?>