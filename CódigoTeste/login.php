<?php
//variavel de sessão(armazena dados para ser usado pelo seu site)
session_start(); //abrir uma sessão
//ter conexão com o bd
include "db.php"; //tipo import

$email=$_POST["email"]; //esta vindo de um post
$senha=$_POST["senha"]; //chama a senha pelo post(no form)
$cont = 0;
//consultar no banco

$query="SELECT*FROM usuario WHERE usuarioEmail='$email' AND usuarioSenha='$senha' ";

$consulta=mysqli_query($conexao,$query) or die("Erro no banco de dados!");//a função executa uma consulta no banco, e para fazer isso precisada conexão e a consulta que quer executar

if(mysqli_num_rows($consulta)==1){//função que retorna o numero de linhas
    $row = mysqli_fetch_array($consulta);//traz um array de valores da consulta
    $_SESSION["nomeusuario"]=$row["usuarioNome"];//pega o nome do usuario esta sendo salva em uma variavel de sessão
    $_SESSION["ID"]=$row["usuarioID"];
    header("location: home.php");
    exit;
}else{
    header("location: index.php?erro=1");
}
mysqli_close($conexao);

// Recupera o login
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;
?>