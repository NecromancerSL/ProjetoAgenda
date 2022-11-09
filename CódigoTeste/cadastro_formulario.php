<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <title>cadastro</title>
</head>

<body>

    <div class="container">

        <div class="row justify-content-center align-items-center vh-100">

            <div class="col-auto background">

                <h1 class="titulo" id="texto">cadastro de usuário</h1>

                <form method="post" action="cadastrar.php">

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">E-mail</label>
                        <input type="email" class="form-control inputvalor" id="email" name="email"
                            placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Senha</label>
                        <input type="password" class="form-control inputvalor" name="senha" id="senha"
                            placeholder="Digite sua senha" required>
                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Nome</label>
                        <input type="text" class="form-control inputvalor" name="nome" id="nome"
                            placeholder="Digite seu nome" required>
                    </div>

                    <div class="mb-3">
                        <label for="formGroupExampleInput" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control inputvalor" name="dataNascimento" id="dataNascimento"
                            placeholder="Digite sua senha" required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary botao" id="btnacessar">Cadastrar</button>
                    </div>

                    <h6 class="alerta" id="alerta">
                        <?php $erro = filter_input(INPUT_GET,"erro",FILTER_SANITIZE_NUMBER_INT);
                        if($erro==1){
                            echo "Data Inválida";
                        }?>
                    </h6>

                </form>
                <div class="mb-3">
                    <a id="cadastroLink" href="index.php">Logar</a>
                </div>
            </div>

        </div>

    </div>
    <script src=js/cadastro.js></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>