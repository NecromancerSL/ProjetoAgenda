<?php


//lembrando que o dsi2022 foi o nome dado no create database no xamp

//comentario

//Servidor
$servidor ="localhost"; //$ = declara uma variavel

//Usuario
$usuario="root";//padrao maria db entre outros

//Senha
$senha="";//padra deixar vazio

//Banco de Dados
$db="Grupo2";//apontar para o bando de dados


//Conexão
$conexao=mysqli_connect($servidor,$usuario,$senha,$db); //função do php que conecta com o banco

//Verifica a conexão

if(!$conexao){
    echo "Ocorreu um erro! Banco de dados offline";
}

?>