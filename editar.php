<?php
    session_start();
    include "db.php";
    $id = filter_input(INPUT_GET,"id",FILTER_SANITIZE_NUMBER_INT);
    
    

    if(isset($_POST["editar"])){
        $agendaTitulo=$_POST["agendaTitulo"];
        $agendaCor=$_POST["agendaCor"];
        $agendaInicial=$_POST["agendaInicial"];
        $agendaFinal=$_POST["agendaFinal"];
        if($agendaInicial<$agendaFinal){
        $query="UPDATE agendamento set title = '$agendaTitulo', color = '$agendaCor', start='$agendaInicial', end='$agendaFinal' where id=$id";
        if ($conexao->query($query) === TRUE) {
            header("location: agendamentos.php?pagina=1");
        } else {
            header("location: agendamento_formulario_editar.php?erro=1&id=$id");
        }
    }else{
        header("location: agendamento_formulario_editar.php?erro=2&id=$id");
    }
        
   } else if(isset($_POST["editar_perfil"])){
        $imagem = $_FILES["imagem"];
            if($imagem != NULL) {
            $img_nome = "imagem_user$id.png";
            $dir = 'imagens/perfil/';
            move_uploaded_file($_FILES['imagem']['tmp_name'], $dir.$img_nome);
        }
        $nome=$_POST["nome"];
        $email=$_POST["email"];
        $dataNascimento=$_POST["dataNascimento"];
        $query="UPDATE usuario set usuarioEmail = '$email', usuarioNome = '$nome', usuarioDataNascimento='$dataNascimento' where usuarioid=$id";
        if ($conexao->query($query) === TRUE) {
            $_SESSION["nomeusuario"]="$nome";
            header("location: perfil.php?acerto=2");
        } else {
            header("location: perfil.php?erro=1");
        }
   } 
   mysqli_close($conexao);
?>