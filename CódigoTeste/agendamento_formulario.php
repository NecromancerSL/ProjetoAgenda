<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">
        
        <title>cadastro</title>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="">Olá, <?php session_start();
                                            echo $_SESSION["nomeusuario"]; ?></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item active">
            <a class="nav-link" href="home.php">Home <span class="sr-only"></span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="agendamentos.php">Agendamentos <span class="sr-only"></span></a>
          </li>
        </ul>
        <form class="d-flex">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
    <div class="container">  
    
        <div class="row justify-content-center align-items-center vh-100">
                
                    <div class="col-auto background">               

                        <h1 class="titulo" id="texto">Formulario de Agenda</h1>

                        <form method="post" action="agendar.php">                    

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Titulo</label>
                            <input type="text" class="form-control inputvalor" id="titulo" name="agendaTitulo" placeholder="Digite o titulo" required>
                        </div>
                        
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Cor</label>
                            <select class="form-select" aria-label="Default select example" name="agendaCor" id="cor">
                                <option value="blue"selected>Azul</option>
                                <option value="red">Vermelho</option>
                                <option value="yellow">Amarelo</option>
                                <option value="green">Verde</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Data de Início</label>
                            <input type="datetime-local" class="form-control inputvalor" name="agendaInicial" id="inicial" placeholder="Digite a data inicial" required>
                        </div>  

                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Data de Termino</label>
                            <input type="datetime-local" class="form-control inputvalor" name="agendaFinal" id="final" placeholder="Digite a data final" required>
                        </div>        

                        <div class="mb-3">
                            <button  type="submit" class="btn btn-primary botao" id="btnacessar">Agendar</button> 
                        </div>    
                        
                        <h6 class="alerta" id="alerta"></h6>

                        </form>
                    </div>               
                       
        </div>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
</html>