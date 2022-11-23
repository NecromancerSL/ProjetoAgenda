<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-auto background">

                <h1 class="titulo" id="texto">Sistema de Login</h1>

                <form method="post" action="login.php">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">E-mail</label>
                        <input type="email" class="form-control inputvalor" id="email" name="email"
                            placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Senha</label>
                        <input type="password" class="form-control inputvalor" name="senha" id="senha"
                            placeholder="Digite sua senha" required>
                        <input class="form-check-input" type="checkbox" id="flexCheckDefault" onclick="myFunction()">
                        <label class="form-check-label" for="flexCheckDefault">Mostrar senha</label>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-dark botao" id="btnacessar">Acessar</button>
                    </div>

                    <h6 class="alerta" id="alerta">
                        <?php $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                        if($erro==1){
                            echo "Email ou Senha incorreta";
                        }?>
                    </h6>

                    <div class="mb-3">
                        <a id="cadastroLink" href="cadastro_formulario.php">Inscrever-se</a>
                    </div>


                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="js/cadastro.js"></script>
</body>

</html>