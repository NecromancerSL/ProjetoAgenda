<?php
    include "db.php";

    if(isset($_POST['codigo']) && $_POST['codigo']==$_POST['code']){
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
    }else if(isset($_POST['code'])==false){
        $code=rand(1,999990);
        $email=$_POST["email"];
        $senha=$_POST["senha"];
        $nome=$_POST["nome"];
        $dataNascimento=$_POST["dataNascimento"];
        include "enviar_email.php";
    }else{
        header("location: cadastrar?erro=1");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmação</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center vh-100">
        <div class="col-5 background">
        <h1 class="titulo" id="texto">Código de Confirmação</h1>
            <form method="post" action="cadastrar.php">
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Código de confirmação</label>
                    <input type="codigo" class="form-control inputvalor" name="codigo"
                    placeholder="Digite o código" required>
                </div>
                <input type=hidden name="code" value="<?php echo $code?>">
                <input type=hidden name="email" value="<?php echo $email?>">
                <input type=hidden name="senha" value="<?php echo $senha?>">
                <input type=hidden name="nome" value="<?php echo $nome?>">
                <input type=hidden name="dataNascimento" value=<?php echo $dataNascimento?>>
                <div class="mb-3">
                    <button type="submit" class="btn btn-dark botao" id="btnacessar">Confirmar</button>
                </div>
            </form>
            <h6 class="alerta" id="alerta">
            <?php $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                if($erro==1){
                    echo "código inválido";
                }
            ?>
            </h6>
        </div>
    </div>
</div>
</body>
</html>