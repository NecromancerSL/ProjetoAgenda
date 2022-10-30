<?php

include 'db.php';
session_start();
$usuID=$_SESSION["ID"];



$query_envents="select id,title,color,start,end from agendamento where usuarioID=".$usuID.";";

$resultado=mysqli_query($conexao,$query_envents);
$eventos=[];

while($row_events=$resultado->fetch_array()){
    $id=$row_events['id'];
    $title=$row_events['title'];
    $color=$row_events['color'];
    $start=$row_events['start'];
    $end=$row_events['end'];

    $eventos[]=[
        'id'=>$id,
        'title'=>$title,
        'color'=>$color,
        'start'=>$start,
        'end'=>$end,
    ];
}


echo json_encode($eventos);

?>