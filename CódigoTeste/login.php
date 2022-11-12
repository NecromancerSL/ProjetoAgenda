<?php
//variavel de sessão(armazena dados para ser usado pelo seu site)
session_start(); //abrir uma sessão
//ter conexão com o bd
include "db.php"; //tipo import

$email=$_POST["email"]; //esta vindo de um post
$senha=md5($_POST["senha"]); //chama a senha pelo post(no form)

$query="SELECT*FROM usuario WHERE usuarioEmail='$email' AND usuarioSenha='$senha' ";

$consulta=mysqli_query($conexao,$query) or die("Erro no banco de dados!");//a função executa uma consulta no banco, e para fazer isso precisada conexão e a consulta que quer executar
mysqli_close($conexao);
if(mysqli_num_rows($consulta)==1){//função que retorna o numero de linhas
    $row = mysqli_fetch_array($consulta);//traz um array de valores da consulta
    $_SESSION["nomeusuario"]=$row["usuarioNome"];//pega o nome do usuario esta sendo salva em uma variavel de sessão
    $_SESSION["ID"]=$row["usuarioID"];
    header("location: home.php");
    exit;
}else{
    header("location: index.php?erro=1");
}
?>